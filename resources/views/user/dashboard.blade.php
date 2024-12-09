This is user page
@if (Route::has('login'))


                            @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link " ><i class="icon-user">LOGOUT</i></button>
                            </form>
                            @endauth
                            @endif