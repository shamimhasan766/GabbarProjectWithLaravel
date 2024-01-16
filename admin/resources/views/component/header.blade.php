    <!-- Header -->
    <header class="header">
        <!-- Fixed navbar -->
        <nav class="navbar fixed-top">
            <div class="container-fluid">
                <div class="sidebar-width">
                    <button class="btn btn-link btn-square menu-btn" type="button">
                        <i class="bi bi-list fs-4"></i>
                    </button>
                    <a class="navbar-brand ms-2" href="">
                        <div class="row">
                            <div class="col-auto"><img src="{{ url('assets/img/favicon48.png') }}" class="mx-100" alt="" /></div>
                            <div class="col ps-0 align-self-center d-none d-sm-block">
                                <h5 class="fw-normal text-dark mb-0">WinDOORS</h5>
                                <p class="small text-secondary">Admin App UI</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="search-header d-none d-xl-block">
                    <div class="input-group input-group-md w-300">
                        <span class="input-group-text text-theme"><i class="bi bi-search"></i></span>
                        <input class="form-control pe-0" type="search" placeholder="Type something here..." id="searchglobal">
                        <div class="dropdown input-group-text">
                            <button class="btn btn-link dd-arrow-none dropdown-toggle" type="button" id="searchfilter" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-sliders"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-dontclose mt-2 w-300" aria-labelledby="searchfilter">
                                <ul class="nav nav-WinDOORS" id="searchtab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="searchall-tab" data-bs-toggle="tab" data-bs-target="#searchall" type="button" role="tab" aria-controls="searchall" aria-selected="true">All</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="searchorders-tab" data-bs-toggle="tab" data-bs-target="#searchorders" type="button" role="tab" aria-controls="searchorders" aria-selected="false">Orders</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="searchcontacts-tab" data-bs-toggle="tab" data-bs-target="#searchcontacts" type="button" role="tab" aria-controls="searchcontacts" aria-selected="false">Contacts</button>
                                    </li>
                                </ul>
                                <div class="tab-content py-3" id="searchtabContent">
                                    <div class="tab-pane fade show active" id="searchall" role="tabpanel" aria-labelledby="searchall-tab">
                                        <div class="dropdown-item mb-3">
                                            <div class="input-group input-group-md border rounded">
                                                <span class="input-group-text text-theme"><i class="bi bi-code-square"></i></span>
                                                <select class="form-control simplechosen">
                                                    <option>Successful Order</option>
                                                    <option>Full-filled Order</option>
                                                    <option>Rejected Order</option>
                                                    <option>Delivery Staff</option>
                                                    <option>PM Employees</option>
                                                </select>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush bg-none">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Search apps</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch1">
                                                            <label class="form-check-label" for="searchswitch1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Include Pages</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch2" checked>
                                                            <label class="form-check-label" for="searchswitch2"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Internet resource</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch3" checked>
                                                            <label class="form-check-label" for="searchswitch3"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">News and Blogs</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch4">
                                                            <label class="form-check-label" for="searchswitch4"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="searchorders" role="tabpanel" aria-labelledby="searchorders-tab">
                                        <div class="dropdown-item mb-3">
                                            <div class="input-group input-group-md border rounded">
                                                <span class="input-group-text text-theme"><i class="bi bi-box"></i></span>
                                                <select class="form-control" id="searchfilterlist" multiple>
                                                    <option value="San Francisco">San Francisco</option>
                                                    <option value="New York">New York</option>
                                                    <option value="Seattle" selected>Seattle</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="India">India</option>
                                                    <option value="Sydney" selected>Sydney</option>
                                                    <option value="London">London</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="India">India</option>
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">You have already selected maximum option allowed.(This is Configurable)</div>
                                        </div>
                                        <ul class="list-group list-group-flush bg-none">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Show order ID</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch5">
                                                            <label class="form-check-label" for="searchswitch5"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">International Order</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch6" checked>
                                                            <label class="form-check-label" for="searchswitch6"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Taxable Product</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch7" checked>
                                                            <label class="form-check-label" for="searchswitch7"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Published Product</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch8">
                                                            <label class="form-check-label" for="searchswitch8"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="searchcontacts" role="tabpanel" aria-labelledby="searchcontacts-tab">
                                        <div class="dropdown-item mb-3">
                                            <div class="input-group input-group-md border rounded">
                                                <span class="input-group-text text-theme"><i class="bi bi-person-lines-fill"></i></span>
                                                <input class="form-control" type="search" placeholder="Contact Include">
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush bg-none">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Have email ID</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch9">
                                                            <label class="form-check-label" for="searchswitch9"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Have phone number</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch10" checked>
                                                            <label class="form-check-label" for="searchswitch10"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Photo available</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch11" checked>
                                                            <label class="form-check-label" for="searchswitch11"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Referral</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="searchswitch12">
                                                            <label class="form-check-label" for="searchswitch12"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="row">
                                        <div class="col"><button class="btn btn-outline-secondary border">Reset</button></div>
                                        <div class="col-auto">
                                            <button class="btn btn-theme">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="input-group-text d-flex d-xl-none" id="searchclose"><i class="bi bi-x-lg vm"></i></span>
                    </div>
                    <div class="dropdown-menu dropdown-dontclose mt-2 mw-600 w-auto" id="searchresultglobal">
                        <ul class="nav nav-WinDOORS" id="searchtab1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="searchall1-tab" data-bs-toggle="tab" data-bs-target="#searchall1" type="button" role="tab" aria-controls="searchall1" aria-selected="true">All <span class="badge rounded-pill bg-success ml-2 vm">12</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="searchorders1-tab" data-bs-toggle="tab" data-bs-target="#searchorders1" type="button" role="tab" aria-controls="searchorders1" aria-selected="false">Orders <span class="badge rounded-pill bg-primary ml-2 vm">8</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="searchcontacts1-tab" data-bs-toggle="tab" data-bs-target="#searchcontacts1" type="button" role="tab" aria-controls="searchcontacts1" aria-selected="false">Contacts <span class="badge rounded-pill bg-warning ml-2 vm">4</span></button>
                            </li>
                        </ul>
                        <div class="tab-content py-3" id="searchtabContent1">
                            <div class="tab-pane fade show active mh-500 overflow-y-auto" id="searchall1" role="tabpanel" aria-labelledby="searchall1-tab">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col align-self-center">
                                            <h6>Application</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-sm btn-outline-secondary border">View all</a>
                                        </div>
                                    </div>
                                    <div class="row g-0 text-center mb-3">
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-finance.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-bank fs-4"></i>
                                                </div>
                                                <p class="mb-0">Finance</p>
                                                <p class="fs-12 text-muted">Accounting</p>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-network.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-globe fs-4"></i>
                                                </div>
                                                <p class="mb-0">Network</p>
                                                <p class="fs-12 text-muted">Stabilize</p>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-ecommerce.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-box fs-4"></i>
                                                </div>
                                                <p class="mb-0">Inventory</p>
                                                <p class="fs-12 text-muted">Assuring</p>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-project.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-folder fs-4"></i>
                                                </div>
                                                <p class="mb-0">Project</p>
                                                <p class="fs-12 text-muted">Management</p>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-social.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-people fs-4"></i>
                                                </div>
                                                <p class="mb-0">Social</p>
                                                <p class="fs-12 text-muted">Tracking</p>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-learning.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-journal-bookmark fs-4"></i>
                                                </div>
                                                <p class="mb-0">Learning</p>
                                                <p class="fs-12 text-muted">Make-easy</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col align-self-center">
                                            <h6>Orders Placed</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-sm btn-outline-secondary border">View all</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-bag fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0021 by John Merchant</a>
                                                    <p class="text-truncate text-secondary small">2 items, $250.00, 09 December 2021</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-basket fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0026 by Will Smith</a>
                                                    <p class="text-truncate text-secondary small">4 items, $530.00, 18 December 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-cart fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0030 by Switty David</a>
                                                    <p class="text-truncate text-secondary small">1 items, $50.00, 20 December 2021</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-cart4 fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0041 by Mr.Walk Wolf</a>
                                                    <p class="text-truncate text-secondary small">3 items, $130.00, 16 December 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col align-self-center">
                                            <h6>Contacts</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-sm btn-outline-secondary border">View all</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="assets/img/user-2.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Ms. Switty David</a>
                                                    <p class="text-truncate text-secondary small">US, UK Recruiter</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="assets/img/user-3.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Dyna Roosevelt</a>
                                                    <p class="text-truncate text-secondary small">Marketing Head at Linmongas</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="assets/img/user-4.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Mr. Freddy Johnson</a>
                                                    <p class="text-truncate text-secondary small">Project Manager</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="assets/img/user-1.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">The Maxartkiller</a>
                                                    <p class="text-truncate text-secondary small">CEO Maxartkiller</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="searchorders1" role="tabpanel" aria-labelledby="searchorders1-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-bag fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0021 by John Merchant</a>
                                                    <p class="text-truncate text-secondary small">2 items, $250.00, 09 December 2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-basket fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0026 by Will Smith</a>
                                                    <p class="text-truncate text-secondary small">4 items, $530.00, 18 December 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-cart fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0030 by Switty David</a>
                                                    <p class="text-truncate text-secondary small">1 items, $50.00, 20 December 2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-cart4 fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0041 by Mr.Walk Wolf</a>
                                                    <p class="text-truncate text-secondary small">3 items, $130.00, 16 December 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="searchcontacts1" role="tabpanel" aria-labelledby="searchcontacts1-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="assets/img/user-2.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Ms. Switty David</a>
                                                    <p class="text-truncate text-secondary small">US, UK Recruiter</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="assets/img/user-3.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Dyna Roosevelt</a>
                                                    <p class="text-truncate text-secondary small">Marketing Head at Linmongas</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="assets/img/user-4.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Mr. Freddy Johnson</a>
                                                    <p class="text-truncate text-secondary small">Project Manager</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="assets/img/user-1.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">The Maxartkiller</a>
                                                    <p class="text-truncate text-secondary small">CEO Maxartkiller</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-expand-xl d-none d-xxxl-block ms-3">
                    <div class="collapse navbar-collapse" id="mainheaderNavbar">
                        <ul class="nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dd-arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu">
                                    <div><a class="dropdown-item" href="/profileUpdate">Profile</a></div>
                                    <div class="dropdown open-right dropdown-dontclose">
                                        <a class="dropdown-item" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                            Company <span class="arrow bi bi-chevron-right"></span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <div><a class="dropdown-item active" href="company-profile.html">Company Profile</a></div>
                                            <div><a class="dropdown-item" href="company-branding.html">Branding</a></div>
                                            <div><a class="dropdown-item" href="company-userroles.html">User Roles </a></div>
                                            <div><a class="dropdown-item" href="company-resources.html">Resources</a></div>
                                        </div>
                                    </div>
                                    <div><a class="dropdown-item" href="management.html">Management</a></div>
                                    <div><a class="dropdown-item" href="career.html">Career</a></div>
                                    <div><a class="dropdown-item" href="forum.html">Forum</a></div>
                                    <div>
                                        <hr class="dropdown-divider">
                                    </div>
                                    <div><a class="dropdown-item" href="help-center.html">Help Center</a></div>
                                    <div><a class="dropdown-item" href="onboarding.html">Onboarding</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dd-arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Components</a>
                                <div class="dropdown-menu w-500">
                                    <div class="dropdown-title mb-3">
                                        <p>Creative & Unique Components</p>
                                        <p class="text-secondary small">Our components are flexible to adopt. Use these to create new page, make UI template design unique and consistent.</p>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-4">
                                            <div><a class="dropdown-item" href="component-cards.html"><i class="bi bi-card-heading me-2"></i>Cards</a></div>
                                            <div><a class="dropdown-item" href="component-charts.html"><i class="bi bi-bar-chart me-2"></i>Charts</a></div>
                                            <div><a class="dropdown-item" href="component-events.html"><i class="bi bi-calendar-event me-2"></i>Events</a></div>
                                            <div><a class="dropdown-item" href="component-files.html"><i class="bi bi-folder me-2"></i>Files</a></div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-4">
                                            <div><a class="dropdown-item" href="component-summary.html"><i class="bi bi-card-text me-2"></i>Summary</a></div>
                                            <div><a class="dropdown-item" href="component-news.html"><i class="bi bi-newspaper me-2"></i>News</a></div>
                                            <div><a class="dropdown-item" href="component-rating.html"><i class="bi bi-star me-2"></i>Rating</a></div>
                                            <div><a class="dropdown-item" href="component-users.html"><i class="bi bi-person-circle me-2"></i>Users</a></div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-4">
                                            <div><a class="dropdown-item" href="component-progress.html"><i class="bi bi-clock-history me-2"></i>Progress</a></div>
                                            <div><a class="dropdown-item" href="component-pricing.html"><i class="bi bi-tag me-2"></i>Pricing</a></div>
                                            <div><a class="dropdown-item" href="component-media.html"><i class="bi bi-film me-2"></i>Media</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dd-arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Supportive</a>
                                <div class="dropdown-menu w-500">
                                    <div class="dropdown-title mb-3">
                                        <p>Supportive & Helpful Pages</p>
                                        <p class="text-secondary small">Do not make your user lost somewhere else from where they can't come back. Make important journey flawless.</p>
                                    </div>
                                    <div class="row g-0">
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-4">
                                            <div><a class="dropdown-item" href="supportive-signin.html"><i class="bi bi-person me-2 text-theme"></i>Sign in</a></div>
                                            <div><a class="dropdown-item" href="supportive-signup.html"><i class="bi bi-person-plus me-2 text-theme"></i>Sign up</a></div>
                                            <div><a class="dropdown-item" href="supportive-password.html"><i class="bi bi-key me-2 text-theme"></i>Password</a></div>
                                            <div><a class="dropdown-item" href="supportive-verify.html"><i class="bi bi-person-check me-2 text-theme"></i>Verify</a></div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-4">
                                            <div><a class="dropdown-item" href="supportive-maintenance.html"><i class="bi bi-gear me-2"></i>Maintenance</a></div>
                                            <div><a class="dropdown-item" href="supportive-comingsoon.html"><i class="bi bi-alarm me-2"></i>Coming Soon</a></div>
                                            <div><a class="dropdown-item" href="supportive-error.html"><i class="bi bi-bug me-2"></i>Error</a></div>
                                            <div><a class="dropdown-item" href="supportive-onboarding.html"><i class="bi bi-emoji-smile me-2"></i>Onboarding</a></div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6 col-xl-4">
                                            <div><a class="dropdown-item" href="wizard-1.html"><i class="bi bi-list-nested me-2"></i>Wizard</a></div>
                                            <div><a class="dropdown-item" href="supportive-search.html"><i class="bi bi-search me-2"></i>Search</a></div>
                                            <div><a class="dropdown-item" href="supportive-contact.html"><i class="bi bi-envelope me-2"></i>Contact</a></div>
                                            <div><a class="dropdown-item" href="supportive-timeline.html"><i class="bi bi-calendar-week me-2"></i>Timeline</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ms-auto">
                    <div class="row">
                        <div class="col-auto align-self-center d-none d-xxxl-block">
                            <div class="dropdown">
                                <a class="dd-arrow-none dropdown-toggle tempdata" id="selectCity" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                    <img src="assets/img/cloud-sun.png" alt="" class="vm me-2 tempimage" id="tempimage" />
                                    <span class="fw-bold text-dark" id="temperature">46</span><span class="text-uppercase small"> <sup>0</sup>C</span>
                                    <span class="fw-normal d-none" id="city">New York</span> <i class="bi bi-pencil small ms-1 vm"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="selectCity" id="citychange">
                                    <li><a class="dropdown-item" data-value="New York">New York</a></li>
                                    <li><a class="dropdown-item" data-value="London">London</a></li>
                                    <li><a class="dropdown-item" data-value="Qatar">Qatar</a></li>
                                    <li><a class="dropdown-item" data-value="Delhi">Delhi</a></li>
                                    <li><a class="dropdown-item" data-value="Sydney">Sydney</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto align-self-center px-0 d-none d-xxxl-block">
                            <i class="bi bi-three-dots-vertical opacity-3 text-secondary"></i>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-square btn-link search-btn d-inline-block d-xl-none " id="searchtoggle">
                                <i class="bi bi-search"></i>
                            </button>
                            <div class="dropdown d-none d-lg-inline-block">
                                <button type="button" class="btn btn-link text-center" id="language" data-bs-toggle="dropdown" aria-expanded="false"><small class="vm">EN</small> <i class="bi bi-translate"></i></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item active" data-value="EN">EN - English</a></li>
                                    <li><a class="dropdown-item" data-value="FR">FR - French</a></li>
                                    <li><a class="dropdown-item" data-value="CH">CH - Chinese</a></li>
                                    <li><a class="dropdown-item" data-value="HI">HI - Hindi</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-square btn-link text-center d-none d-sm-inline-block" id="addtohome" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Install PWA"><i class="bi bi-cloud-download"></i></button>
                            <button type="button" class="btn btn-square btn-link text-center d-none d-lg-inline-block" id="gofullscreen" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fullscreen"><i class="bi bi-fullscreen"></i></button>
                            <div class="d-inline-block dropdown">
                                <a class="btn btn-square btn-link text-center dd-arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-grid"></i></a>
                                <div class="dropdown-menu dropdown-menu-center w-300">
                                    <div class="dropdown-info text-center bg-theme">
                                        <h6 class="mb-0">Applications</h6>
                                        <p class="text-muted small">Make your app innovative</p>
                                    </div>
                                    <div class="row g-0 text-center mb-3">
                                        <div class="col-4">
                                            <a class="dropdown-item square-item" href="app-finance.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-bank fs-4"></i>
                                                </div>
                                                <p class="mb-0">Finance</p>
                                                <p class="fs-12 text-muted">Accounting</p>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="dropdown-item square-item" href="app-network.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-globe fs-4"></i>
                                                </div>
                                                <p class="mb-0">Network</p>
                                                <p class="fs-12 text-muted">Stabilize</p>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="dropdown-item square-item" href="app-ecommerce.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-box fs-4"></i>
                                                </div>
                                                <p class="mb-0">Inventory</p>
                                                <p class="fs-12 text-muted">Assuring</p>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="dropdown-item square-item" href="app-project.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-folder fs-4"></i>
                                                </div>
                                                <p class="mb-0">Project</p>
                                                <p class="fs-12 text-muted">Management</p>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="dropdown-item square-item" href="app-social.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-people fs-4"></i>
                                                </div>
                                                <p class="mb-0">Social</p>
                                                <p class="fs-12 text-muted">Tracking</p>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="dropdown-item square-item" href="app-learning.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-journal-bookmark fs-4"></i>
                                                </div>
                                                <p class="mb-0">Learning</p>
                                                <p class="fs-12 text-muted">Make-easy</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center"><a class="btn btn-link text-center" href="#">View all <i class="bi bi-arrow-right"></i></a></div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-square btn-link text-center d-none d-sm-inline-block" id="showChat" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat & Support">
                                <span style="width:30px;" class="fa-solid fa-message position-relative">
                                    <span class="badge position-absolute top-0 start-100 translate-middle bg-theme textw-white rounded">
                                        <span class="fs-10">9+</span> <span class="visually-hidden">New alerts</span>
                                    </span>
                                </span>
                            </button>
                            <button type="button" class="btn btn-square btn-link text-center" id="showNotification" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifications">
                                <span class="fa-solid fa-bell position-relative">
                                    <span class="position-absolute top-0 start-100 p-1 bg-danger border border-light rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                        <div class="col-auto align-self-center px-0  d-none d-xxxl-block">
                            <i class="bi bi-three-dots-vertical opacity-3 text-secondary"></i>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown">
                                <a class="dd-arrow-none dropdown-toggle tempdata" id="userprofiledd" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                    <div class="row">
                                        <div class="col-auto align-self-center">
                                            <figure class="avatar avatar-40 rounded-circle coverimg vm">
                                                <img src="{{ url('assets/img/user-1.jpg') }}" alt="" id="userphotoonboarding2" />
                                            </figure>
                                        </div>
                                        <div class="col ps-0 align-self-center d-none d-lg-block">
                                            <p class="mb-0">
                                                <span class="text-dark username">Maxartkiller</span><br>
                                                <small class="small">United States</small>
                                            </p>
                                        </div>
                                        <div class="col ps-0 align-self-center d-none d-lg-block">
                                            <i class="bi bi-chevron-down small vm"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end w-300" aria-labelledby="userprofiledd">
                                    <div class="dropdown-info bg-theme">
                                        <div class="row">
                                            <div class="col-auto">
                                                <figure class="avatar avatar-50 rounded-circle coverimg vm">
                                                    <img src="assets/img/user-1.jpg" alt="" id="userphotoonboarding3" />
                                                </figure>
                                            </div>
                                            <div class="col align-self-center ps-0">
                                                <h6 class="mb-0"><span class="username">Maxartkiller</span></h6>
                                                <p class="text-muted small">Balance: $100.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div><a class="dropdown-item" href="/profileUpdate">My Profile</a></div>
                                    <div>
                                        <a class="dropdown-item" href="home.html">
                                            <div class="row g-0">
                                                <div class="col align-self-center">My Dashboard</div>
                                                <div class="col-auto">
                                                    <figure class="avatar avatar-20 coverimg rounded-circle">
                                                        <img src="assets/img/user-2.jpg" alt="" />
                                                    </figure>
                                                    <figure class="avatar avatar-20 coverimg rounded-circle">
                                                        <img src="assets/img/user-3.jpg" alt="" />
                                                    </figure>
                                                    <figure class="avatar avatar-20 coverimg rounded-circle">
                                                        <img src="assets/img/user-4.jpg" alt="" />
                                                    </figure>
                                                    <div class="avatar avatar-20 bg-theme rounded-circle">
                                                        <small class="fs-10 vm">9+</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown open-left dropdown-dontclose">
                                        <a class="dropdown-item" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                            <div class="row">
                                                <div class="col">Subscription</div>
                                                <div class="col-auto pe-0">
                                                    <p class="small text-success">Upgrade</p>
                                                </div>
                                                <div class="col-auto ps-0"><span class="arrow bi bi-chevron-right"></span></div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu">
                                            <div><a class="dropdown-item" href="subscription.html">Plan</a></div>
                                            <div><a class="dropdown-item" href="your-earning.html">Earning</a></div>
                                            <div><a class="dropdown-item" href="your-payment.html">Payment</a></div>
                                            <div><a class="dropdown-item" href="your-statement.html">Statement</a></div>
                                        </div>
                                    </div>
                                    <div class="dropdown open-left dropdown-dontclose">
                                        <a class="dropdown-item" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                            <div class="row">
                                                <div class="col">Language</div>
                                                <div class="col-auto pe-0"><small class="vm">EN - English</small> <i class="bi bi-translate"></i></div>
                                                <div class="col-auto ps-0"><span class="arrow bi bi-chevron-right"></span></div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu">
                                            <div><a class="dropdown-item active" data-value="EN">EN - English</a></div>
                                            <div><a class="dropdown-item" data-value="FR">FR - French</a></div>
                                            <div><a class="dropdown-item" data-value="CH">CH - Chinese</a></div>
                                            <div><a class="dropdown-item" data-value="HI">HI - Hindi</a></div>
                                        </div>
                                    </div>
                                    <div><a class="dropdown-item" href="your-settings.html">Account Setting</a></div>
                                    <div><a class="dropdown-item" href="{{route('logout')}}">Logout</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header ends -->