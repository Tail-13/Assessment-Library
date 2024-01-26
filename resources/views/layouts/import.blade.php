
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f93633309c.js" crossorigin="anonymous"></script>
    <style>
        #sidebar {
            width: 300px;
            height: 100%;
            position: fixed;
            overflow-x: hidden;
            transition: all 0.4s ease-in-out;
            z-index:1000
        }

        main {
            padding-left: 300px;
            transition: all 0.4s ease-in-out;
        }

        #topbar{
            background-color: white;
            position: sticky;
            top:0;
            z-index: 1000;
        }

        #searchForm {
            display: none;
            overflow: hidden;
            transition: all 0.4s ease-in-out;
        }
    </style>

    <script>
        $(document).ready(function () {
            $("#searchButton").click(function (event) {
                event.stopPropagation();

                $("#searchButton").hide();
                $("#searchForm").show();

                $(document).on("click", function (e) {
                    if ($(e.target).closest("#searchForm, #searchButton").length === 0) {
                        $("#searchForm").hide();
                        $("#searchButton").show();
                    }
                });
            });
        });
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