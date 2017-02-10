@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="medium-offset-2 medium-8 columns">
            <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit="avw2w1-orbit" data-resize="5kjpvc-orbit" id="5kjpvc-orbit" data-events="resize">
                <ul class="orbit-container" tabindex="0" style="height: 206px;">
                    <button class="orbit-previous" aria-label="previous" tabindex="0"><span class="show-for-sr">Previous Slide</span>◀</button>
                    <button class="orbit-next" aria-label="next" tabindex="0"><span class="show-for-sr">Next Slide</span>▶</button>
                    <li class="orbit-slide is-active" data-slide="0" style="display: block; position: relative; top: 0px;" aria-live="polite">
                        <div class="docs-example-orbit-slide">
                            <p><strong>This is dodgerblue.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </li>
                    <li class="orbit-slide slide-1" data-slide="1" style="position: relative; top: 0px; display: none;">
                        <div class="docs-example-orbit-slide">
                            <p><strong>This is rebeccapurple.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </li>
                    <li class="orbit-slide slide-2" data-slide="2" style="position: relative; top: 0px; display: none;">
                        <div class="docs-example-orbit-slide">
                            <p><strong>This is darkgoldenrod.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </li>
                    <li class="orbit-slide slide-3" data-slide="3" style="position: relative; top: 0px; display: none;">
                        <div class="docs-example-orbit-slide">
                            <p><strong>This is lightseagreen.</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </li>
                </ul>
                <nav class="orbit-bullets">
                    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                    <button data-slide="1" class=""><span class="show-for-sr">Second slide details.</span></button>
                    <button data-slide="2" class=""><span class="show-for-sr">Third slide details.</span></button>
                    <button data-slide="3" class=""><span class="show-for-sr">Fourth slide details.</span></button>
                </nav>
            </div>
        </div>
    </div>

@stop