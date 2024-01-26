<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layouts.import')
</head>

<body>
    <aside id="sidebar" class="border-end border-3">
        <div class="p-3 text-center" id="sidebarBrand">
            brand
        </div>
        <div id="sidebarMenu">
            <a>list</a>
        </div>
    </aside>
    <main>
        <nav id="topbar" class="navbar navbar-expand-lg justify-content-between shadow">
            <div id="leftSide" class="ps-3 d-flex align-items-center">
                <button class="btn btn-dark" onclick="toggleSidebar()"><i class="fa-solid fa-bars"></i></button>
                <ol class="breadcrumb mb-0 ms-3">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </div>
            <div class="rightSide pe-3 d-flex">
                <div id="searchForm" class="ms-3">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control border-dark" placeholder="Search">
                            <button type="submit" class="btn btn-dark"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <button id="searchButton" class="btn btn-dark"><i class="fa-solid fa-magnifying-glass"></i></button>
                <button class="btn btn-dark ms-3">Account</button>
                <div></div>
        </nav>
        <div class="p-4">
            @yield('content')
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Show a second modal and hide this one with the button below.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
        </div>
    </main>
</body>

</html>

<script>
    function toggleSidebar(){
        if($("#sidebar").width() > 0){
            $("#sidebar").width(0)
            $("main").css("padding-left", 0)
        } else {
            $("#sidebar").width(300)
            $("main").css("padding-left", 300)
        }
    }
</script>