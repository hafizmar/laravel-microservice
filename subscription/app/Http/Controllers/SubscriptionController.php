<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriptionRequest;
use App\Http\Requests\UpdateSubscriptionRequest;
use App\Models\Subscription;
use App\Interfaces\SubscriptionRepositoryInterface;
use App\Classes\ApiResponseClass;
use App\Http\Resources\SubscriptionResource;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    private SubscriptionRepositoryInterface $subscriptionRepositoryInterface;
    
    public function __construct(SubscriptionRepositoryInterface $subscriptionRepositoryInterface)
    {
        $this->subscriptionRepositoryInterface = $subscriptionRepositoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->subscriptionRepositoryInterface->index();

        return ApiResponseClass::sendResponse(SubscriptionResource::collection($data),'',200);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscriptionRequest $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
