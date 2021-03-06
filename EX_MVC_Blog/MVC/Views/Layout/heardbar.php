<header class="header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="search-area">
            <div class="search-area-inner d-flex align-items-center justify-content-center">
                <div class="close-btn"><i class="icon-close"></i></div>
                <div class="row d-flex justify-content-center">
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand">Mr_Dan Blog</a>
                <!-- Toggle Button-->
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse"
                        aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler"><span></span><span></span><span></span></button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link active ">Home</a>
                    </li>
                    <li class="nav-item"><a href="index.php?url=BlogController/displaylist" class="nav-link ">Blog</a>
                    </li>
                    <li class="nav-item"><a href="index.php?url=BlogController/addBlog" class="nav-link ">New Post</a>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link ">Search</a>
                        <form action="index.php?url=BlogController/searchBlog" method="post">
                            <input type="search" name="title" id="search" placeholder="What are you looking for?">
                            <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>