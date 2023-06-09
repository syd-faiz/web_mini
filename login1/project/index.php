<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pcb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pcb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about_us.html">About us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Components
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="processor.html">Processor</a></li>
                            <li><a class="dropdown-item" href="board.html">Motherboard</a></li>
                            <li><a class="dropdown-item" href="ram.html">RAM</a></li>
                            <li><a class="dropdown-item" href="storage.html">Storage</a></li>
                            <li><a class="dropdown-item" href="fan.html">Cooling Fan</a></li>
                            <li>

                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="More.html">More Topics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                      </li>
                </ul>
          
                <div class="mx-2">
                   <a <button type="button" class="btn btn-danger" href="login.php" >Login</button></a>
                    <a <button type="button" class="btn btn-danger" href="register.php">Signup</button></a>
                    
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Processor</h5>
                    <p>A processor is the most important integrated circuitry (IC) in computer. It is used for
                        interpreting most computer commands. It is an electrical component that performs operation on
                        external data sources such as memory and data stream.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Motherboard</h5>
                    <p>The motherboard is a printed circuit board and foundation of a computer that is the biggest board
                        in a computer chassis. It allocates power and allows communication to and between the CPU, RAM,
                        and all other computer hardware components.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>RAM</h5>
                    <p>RAM is a temporary memory bank where your computer stores data it needs to retrieve quickly. RAM
                        keeps data easily accessible so your processor can quickly find it without having to go into
                        long-term storage to complete immediate processing tasks.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Storage</h5>
                    <p>SSDs can access, read, and write files faster than HDDs. SSDs access data electronically through
                        'cells' that can be written and rewritten thousands of times. HDDs utilize rotational platters
                        and an actuator arm to access files by locating them on the platter then moving to that location
                        to read the data.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cooling Fan</h5>
                    <p>Cooling is essential to the function of a PC. A combination of case fans, power supply fans, CPU
                        fans, heatsinks, GPC fans, and thermal paste is what makes an effective cooling system that
                        stops overheating, malfunction and hardware damage.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Processor</strong>
                        <h3 class="mb-0">All you need to know</h3>
                        <div class="mb-1 text-muted">Feb 12</div>
                        <p class="card-text mb-auto">A processor, also known as a central processing unit (CPU), is the primary component of
                            a computer that carries out instructions and performs calculations necessary for the computer to
                            function.</p>
                        <a href="processor.html" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="260" src="card1.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Motherboard</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <a href="board.html" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="card2.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">RAM</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Random-access memory (RAM) is a form of computer memory that
                            can be read and changed in any order, typically used to store working data and machine
                            code.</p>
                        <a href="ram.html" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="260" src="card3.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Storage</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <a href="storage.html" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="card4.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Processors</strong>
                        <h3 class="mb-0">AMD Ryzen 9 3990X Vs Intel Core i9-9900K</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">The Core i9-9900K has a base frequency of 3.6GHz and a maximum
                            boost frequency of 5GHz, compared with the Ryzen 9 3900X's base 3.8GHz speed and 4.6GHz
                            maximum boost.</p>
                        <a href="intel_amd.html" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="300" src="card5.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container">
        <p>© 2022–2023 Pcb Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>