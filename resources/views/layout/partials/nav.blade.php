<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg bg-dark"  color-on-scroll="100" style="@yield('nav-style')">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('home.index') }}">SneakerX</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('brands.index') }}" class="nav-link">Marques</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('news.index') }}" class="nav-link">News</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact.index') }}" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <form action="{{ url('products.filter') }}" method="POST" class="form-inline ml-auto" style="padding: 0.9375rem;">
                        @csrf
                        <div class="form-group has-white">
                            <input type="text" name="product_name" class="form-control" placeholder="Rechercher">
                        </div>
                        <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                            <i class="material-icons">search</i>
                        </button>
                    </form>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('cart.index') }}" class="nav-link"><i class="material-icons">shopping_cart</i> 0 Items</a>--}}
{{--                </li>--}}
            </ul>

{{--            <form class="form-inline ml-auto">--}}
{{--                <div class="form-group has-white">--}}
{{--                    <input type="text" class="form-control" placeholder="Search">--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">--}}
{{--                    <i class="material-icons">search</i>--}}
{{--                </button>--}}
{{--            </form>--}}

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('cart.index') }}" class="nav-link"><i class="material-icons">shopping_cart</i> {{ count(session('userCart')) > 0 ? count(session('userCart')) : 0 }} Articles</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
