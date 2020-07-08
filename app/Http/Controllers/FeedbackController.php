<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    /**
     * Return Feedback View with Comments from DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::join('users', 'users.id', '=', 'feedback.user_id')
            ->select('users.name', 'feedback.comment', 'feedback.created_at')
            ->get();

        return view('pages.feedback')->with([
            'feedbacks' => $feedbacks
        ]);
    }

    /**
     * Validate Comment Request before sending to DB
     *
     * @param Request $request
     * @return bool|\Illuminate\Support\MessageBag
     */
    public function validationRules(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => ['required', 'max:500']
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    /**
     * Create and Store new Comment in DB.
     *
     * @param Request $request
     * @return Feedback
     */
    public function create(Request $request)
    {
        $feedback = new Feedback();
        $feedback->user_id = Auth::id();
        $feedback->comment = $request->json('comment');
        $feedback->name = Auth::user()->name;

        $feedback->save();

        return $feedback;
    }

    /**
     * Return JSON Response and store Comment in DB
     * if validation passes.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form request
        $validation = $this->validationRules($request);

        // Set response for JSON
        $response = [
            'fail' => $validation
        ];

        if ($validation === true && auth()->user()) {
            // Create new comment
            $feedback = $this->create($request);

            // Reset response for JSON
            $response = [
                'success' => $feedback
            ];
        }

        return response()->json($response);
    }
}
