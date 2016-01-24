<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Presenters
    |--------------------------------------------------------------------------
    |
    | Define your objects and their corrosponding presenters here to have them
    | automatically decorated when resolved in a view. The array key should
    | be your object and the value will be the presenter. Remember to use
    | the class names and not actual instances.
    |
    */
MMA\Page::class => MMA\Presenters\PagePresenter::class,
MMA\Post::class => MMA\Presenters\PostPresenter::class,
MMA\Component::class => MMA\Presenters\PostPresenter::class,
MMA\User::class => MMA\Presenters\UserPresenter::class,
];
