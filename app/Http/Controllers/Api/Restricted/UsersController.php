<?php

namespace App\Http\Controllers\Api\Restricted;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Users\CreateRequest;
use App\Http\Requests\Api\Users\DestroyRequest;
use App\Http\Requests\Api\Users\GetRequest;
use App\Http\Requests\Api\Users\UpdateRequest;
use App\Http\Transformer\UserTransformer;
use App\Repositories\UsersRepository;
use App\Services\Users\CreateUser;
use Auth;

class UsersController extends Controller
{
    /**
     * @var UsersRepository
     */
    private $repository;

    /**
     * UsersController constructor.
     * @param UsersRepository $repository
     */
    public function __construct(UsersRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->repository->getAll();

        return fractal($users, new UserTransformer());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $request
     * @param CreateUser $createUser
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request, CreateUser $createUser)
    {
        $createUser->setEmail($request->get('email'));
        $createUser->setName($request->get('name'));

        if ($createUser->fire()) {
            return fractal($createUser->getUser(), new UserTransformer());
        }

        $this->responseError(trans('messages.error'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->repository->find($id);

        return fractal($user, new UserTransformer());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function update(UpdateRequest $request, $id)
    {
        $user = $this->repository->update(
            $id,
            $request->get('name'),
            $request->get('email')
        );

        return fractal($user, new UserTransformer());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = $this->repository->find($id);
        $this->repository->delete($id);

        return fractal($user, new UserTransformer());
    }
}
