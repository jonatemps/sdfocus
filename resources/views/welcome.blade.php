<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    @livewireStyles
  </head>
  <body>
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">SD-FOCUS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Monitoring</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">First-Call / Frist-Call Qualité</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Performances
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Infra</a></li>
                        <li><a class="dropdown-item" href="#">Distribution</a></li>
                        {{-- <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                      </ul>
                    </li>
                  </ul>
                  <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Détail</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">Résumé</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"><strong>Total</strong></th>
                                <th scope="col" class="text-center">200</th>
                                <th scope="col" class="text-center">200</th>
                                <th scope="col" class="text-center"><i class="fa-solid fa-arrow-trend-down text-danger"></i> 2%</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><strong>Site_key</strong></td>
                                    <td class="text-center"><strong>Site_name</strong></td>
                                    <td class="text-center"><strong>Zone_Com</strong></td>
                                    <td style="text-center"><strong>Secteur_Com</strong></td>
                                    <td class="text-center"><strong>Juin</strong></td>
                                    <td class="text-center"><strong>Juillet</strong></td>
                                    <td class="text-center"><strong>% Variance</strong></td>
                                </tr>
                                <tr>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center"><i class="fa-solid fa-arrow-trend-up text-success"></i> 2%</td>
                                </tr>
                                <tr>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>FUNA</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center"><i class="fa-solid fa-arrow-trend-down text-danger"></i> 2%</td>
                                </tr>
                                <tr>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>KIKWIT</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">2%</td>
                                </tr>
                                <tr>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>LUKUNGA</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">2%</td>
                                </tr>
                                <tr>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>MONT AMBA</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">2%</td>
                                </tr>
                                <tr>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>KINSHASA</td>
                                    <td>TSHANGU</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">2%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center">Juin</th>
                                <th scope="col" class="text-center">Juillet</th>
                                <th scope="col" class="text-center">% Variance</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: right;"><strong>Total</strong></td>
                                    <td class="text-center"><strong>200</strong></td>
                                    <td class="text-center"><strong>150</strong></td>
                                    <td class="text-center"><strong>2%</strong></td>
                                </tr>
                                <tr>
                                    <td>KINSHASA</td>
                                    <td class="text-center">12</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center"><i class="fa-solid fa-arrow-trend-up text-success"></i> 2%</td>
                                </tr>
                                <tr>
                                    <td>FUNA</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center"><i class="fa-solid fa-arrow-trend-down text-danger"></i> 2%</td>
                                </tr>
                                <tr>
                                    <td>KIKWIT</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">2%</td>
                                </tr>
                                <tr>
                                    <td>LUKUNGA</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">2%</td>
                                </tr>
                                <tr>
                                    <td>MONT AMBA</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">2%</td>
                                </tr>
                                <tr>
                                    <td>TSHANGU</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">13</td>
                                    <td class="text-center">2%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    @livewireScripts
  </body>
</html>
