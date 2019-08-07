@extends('medKitTheme::_layouts.back.app')

@section('content')

<!-- #########################
       NAVBARS -->
       <div class="container">
            <h3 id="h3-navbars" class="h3-marks">NAVBAR</h3>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>


          </div> <!-- /container for NAVBARS -->

          <!-- #########################
               JUMBOTRON -->
          <div class="container">
            <h3 id="h3-" class="h3-marks">JUMBOTRON</h3>

            <div class="jumbotron">
              <h1 class="display-3">Hello, world!</h1>
              <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <hr class="m-y-2">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
              </p>
            </div>
          </div> <!-- /container for JUMBOTRON -->

          <!-- #########################
             BREADCRUMBS & PAGINATION -->
          <div class="container">
            <h3 id="h3-" class="h3-marks">BREADCRUMBS & PAGINATION</h3>

                    <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                          </nav>

              <div class="row">
                <div class="col-12">
                        <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                              </nav>
                </div>

              </div>
          </div> <!-- /container for BREADCRUMBS & PAGINATION -->

          <!-- #########################
               CARDS -->
          <div class="container">
            <h3 id="h3-cards" class="h3-marks">CARDS (with card-columns in Bootstrap 4)</h3>

            <div class="card-columns">
                <div class="card">
                  <div class="card-header">
                    Featured
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                  <div class="card-footer text-muted">
                    2 days ago
                  </div>
                </div>

                <div class="card text-white">
                  <img class="card-img" style="width:100%;" src="https://unsplash.it/253/212/?image=855" alt="Card image">
                  <div class="card-img-overlay">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <blockquote class="card-blockquote">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                    <div class="card-body">
                      <button class="btn btn-outline-danger">Check out this btn</button>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <img class="card-img-top" style="width:100%;" src="https://unsplash.it/318/180/?image=964" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info btn-block">Button</a>
                  </div>
                </div>

                <div class="card text-white">
                  <img class="card-img" style="width:100%;" src="https://unsplash.it/253/212/?image=911" alt="Card image">
                  <div class="card-img-overlay">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>

                <div class="card border-danger">
                  <div class="card-body">
                    <blockquote class="text-danger">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                  </div>
                </div>

                <div class="card border-success text-xs-center">
                  <div class="card-body">
                    <blockquote class="text-success">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                  </div>
                </div>
            </div><!-- /card-columns -->
          </div> <!-- /container for CARDS -->

          <!-- #########################
               TYPOGRAPHY -->
          <div class="container">
            <h3 id="h3-typography" class="h3-marks">TYPOGRAPHY</h3>

            <div class="one-ui-kit-example-container">
              <h1>Example heading <span class="badge badge-secondary">New</span></h1>
              <h2>Example heading <span class="badge badge-secondary">New</span></h2>
              <h3>Example heading <span class="badge badge-secondary">New</span></h3>
              <h4>Example heading <span class="badge badge-secondary">New</span></h4>
              <h5>Example heading <span class="badge badge-secondary">New</span></h5>
              <h6>Example heading <span class="badge badge-secondary">New</span></h6>
              <p>
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-secondary">Secondary</span>
                    <span class="badge badge-success">Success</span>
                    <span class="badge badge-danger">Danger</span>
                    <span class="badge badge-warning">Warning</span>
                    <span class="badge badge-info">Info</span>
                    <span class="badge badge-light">Light</span>
                    <span class="badge badge-dark">Dark</span>

                    <span class="badge badge-pill badge-primary">Primary</span>
                    <span class="badge badge-pill badge-secondary">Secondary</span>
                    <span class="badge badge-pill badge-success">Success</span>
                    <span class="badge badge-pill badge-danger">Danger</span>
                    <span class="badge badge-pill badge-warning">Warning</span>
                    <span class="badge badge-pill badge-info">Info</span>
                    <span class="badge badge-pill badge-light">Light</span>
                    <span class="badge badge-pill badge-dark">Dark</span>

              </p>
              <p>You can use the mark tag to <mark>highlight</mark> text.</p>
              <p><del>This line of text is meant to be treated as deleted text.</del></p>
              <p><strong>This line rendered as bold text.</strong></p>
              <p><em>This line rendered as italicized text.</em></p>
              <blockquote class="blockquote">
                <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
              <h1 class="display-1">Display 1</h1>
              <h1 class="display-2">Display 2</h1>
              <h1 class="display-3">Display 3</h1>
              <h1 class="display-4">Display 4</h1>
            </div>
          </div> <!-- /container for TYPOGRAPHY -->

          <!-- #########################
               BUTTONS -->
          <div class="container">
            <h3 id="h3-buttons" class="h3-marks">BUTTONS</h3>

            <div class="one-ui-kit-example-container">
              <button type="button" class="btn btn-primary">Primary</button>
              <button type="button" class="btn btn-secondary">Secondary</button>
              <button type="button" class="btn btn-success">Success</button>
              <button type="button" class="btn btn-danger">Danger</button>
              <button type="button" class="btn btn-warning">Warning</button>
              <button type="button" class="btn btn-info">Info</button>
              <button type="button" class="btn btn-light">Light</button>
              <button type="button" class="btn btn-dark">Dark</button>

              <button type="button" class="btn btn-link">Link</button> <br><br>

              <button type="button" class="btn btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                <button type="button" class="btn btn-outline-success">Success</button>
                <button type="button" class="btn btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-outline-info">Info</button>
                <button type="button" class="btn btn-outline-light">Light</button>
                <button type="button" class="btn btn-outline-dark">Dark</button>



              <p></p>

              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                      <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                    </label>
                </div>

                <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                </div>

              <p></p>

            </div>
          </div> <!-- /container for BUTTONS -->

          <!-- #########################
               ALERTS -->
          <div class="container">
            <h3 id="h3-alerts" class="h3-marks">ALERTS</h3>

            <div class="alert alert-primary" role="alert">
                A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-secondary" role="alert">
                A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-success" role="alert">
                A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger" role="alert">
                A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-warning" role="alert">
                A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-info" role="alert">
                A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-light" role="alert">
                A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-dark" role="alert">
                A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          </div> <!-- /container for ALERTS -->

          <!-- #########################
               TABS & PILLS -->
          <div class="container">
            <h3 id="h3-tabs" class="h3-marks">TABS & PILLS</h3>

            <div class="row one-ui-kit-example-container">
              <div class="col-sm-4">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Another link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
              </div>

              <div class="col-sm-4">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
                  </li>
                </ul>
              </div>

              <div class="col-sm-4">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
          </div> <!-- /container for TABS & PILLS -->

          <!-- #########################
               FORMS AND INPUTS -->
          <div class="container">
            <h3 id="h3-forms" class="h3-marks">FORMS AND INPUTS</h3>

            <div class="row">
              <div class="col-sm-6 one-ui-kit-example-container" style="padding-bottom: 5em;">
                <form>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2">Radios</label>
                    <div class="col-sm-10">

                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                          </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2">Checkbox</label>
                    <div class="col-sm-10">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-outline-danger">Cancel</button>
                      <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-6 one-ui-kit-example-container">
                <h4>Validation:</h4>
                <div class="form-group">
                  <label class="form-control-label" for="inputSuccess1">Input with success</label>
                  <input type="text" class="form-control is-valid" id="inputSuccess1">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="inputWarning1">Input with warning</label>
                  <input type="text" class="form-control is-invalid" id="inputWarning1">
                </div>
              </div>
            </div>
          </div> <!-- /container for FORMS AND INPUTS -->

          <!-- #########################
               LIST GROUPS -->
          <div class="container">
            <h3 id="h3-listgroups" class="h3-marks">LIST GROUPS</h3>

            <div class="row one-ui-kit-example-container">
              <div class="col-12">
                  <ul class="list-group">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cras justo odio
                        <span class="badge badge-primary badge-pill">14</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Dapibus ac facilisis in
                        <span class="badge badge-primary badge-pill">2</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Morbi leo risus
                        <span class="badge badge-primary badge-pill">1</span>
                      </li>
                    </ul>
              </div>
            </div>
          </div> <!-- /container for LIST GROUPS -->

          <!-- #########################
               MODAL -->
          <div class="container">
            <h3 id="h3-modals" class="h3-marks">MODAL</h3>

            todo...
          </div> <!-- /container for MODAL -->

          <!-- #########################
               IMAGES -->
          <div class="container">
            <h3 class="h3-marks">IMAGES</h3>
              <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22200%22%20height%3D%22200%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F200x200%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_1520d3ee7b0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1520d3ee7b0%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%2F%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="alt-text" class="rounded">
              <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22200%22%20height%3D%22200%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F200x200%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_1520d3ee7b0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1520d3ee7b0%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%2F%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="alt-text" class="rounded-circle">
              <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22200%22%20height%3D%22200%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3C!--%0ASource%20URL%3A%20holder.js%2F200x200%0ACreated%20with%20Holder.js%202.8.2.%0ALearn%20more%20at%20http%3A%2F%2Fholderjs.com%0A(c)%202012-2015%20Ivan%20Malopinsky%20-%20http%3A%2F%2Fimsky.co%0A--%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%3C!%5BCDATA%5B%23holder_1520d3ee7b0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%5D%5D%3E%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1520d3ee7b0%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%2F%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="alt-text" class="img-thumbnail">
          </div> <!-- /container for IMAGES -->


          <!-- #########################
               Tooltips -->
               <div class="container">
                  <h3 class="h3-tooltips">TOOLTIPS</h3>
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                      Tooltip on top
                    </button>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                      Tooltip on right
                    </button>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                      Tooltip on bottom
                    </button>
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                      Tooltip on left
                    </button>
                </div> <!-- /container for Tooltips -->

                <!-- #########################
               Tooltips -->
               <div class="container">
                  <h3 class="h3-popover">POPOVERS</h3>
                  <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      Popover on top
                    </button>

                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      Popover on right
                    </button>

                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                    sagittis lacus vel augue laoreet rutrum faucibus.">
                      Popover on bottom
                    </button>

                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      Popover on left
                    </button>
                </div> <!-- /container for Tooltips -->


             <!-- #########################
               PROGRESS -->
               <div class="container">
                  <h3 class="h3-progress">PROGRESS</h3>
                  <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div> <!-- /container for PROGRESS -->

          <!-- #########################
               CAROUSEL -->
          <div class="container">
            <h3 class="h3-marks">CAROUSEL</h3>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img src="https://unsplash.it/1200/500/?image=923" alt="First slide">
                  <div class="carousel-caption">
                    <h3>Bad Pyrmont, Deutschland</h3>
                    <p>Photo by: Sebastian Unrau</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://unsplash.it/1200/500/?image=903" alt="Second slide">
                  <div class="carousel-caption">
                    <h3>Spiral Jetty, United States</h3>
                    <p>Photo by: Greg Rakozy</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://unsplash.it/1200/500/?image=953" alt="Third slide">
                  <div class="carousel-caption">
                    <h3>Barcelona, Spain</h3>
                    <p>Photo by: Alexandre Perotto</p>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div> <!-- /container for CAROUSEL -->

            <!-- #########################
               TABLES -->
          <div class="container">
            <h3 class="h3-marks">TABLES</h3>

            <div class="one-ui-kit-example-container" style="background:white;">
              <div class="row">
                <div class="col-sm-6">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="col-sm-6">
                  <table class="table table-inverse">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row" style="margin-top:30px;">
                <div class="col-sm-6">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-sm-6">
                    <table class="table">
                      <thead>
                        <tr class="table-info">
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-danger">
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr class="table-warning">
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr class="table-success">
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div> <!-- /container for TABLES -->

          <!-- #########################
               PROGRESS -->
          <div class="container">
            <h3 class="h3-marks">PROGRESS</h3>


          </div> <!-- /container for PROGRESS -->

@endsection
