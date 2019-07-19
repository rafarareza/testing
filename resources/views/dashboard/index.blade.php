@extends('layouts.template')

@section('main')
<nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-warning btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <span class="navbar-brand">Dashboard</span>
            <div class="d-block d-lg-none dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">notifications</i>
                <span class="notification"><span>5</span></span>
              </a>
              <div class="dropdown-menu drop-xs" aria-labelledby="navbarDropdownMenuLink-1">
                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                <a class="dropdown-item" href="#">Another Notification</a>
                <a class="dropdown-item" href="#">Another One</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="see-all">
                  <span>Show More..</span>
                </a>
              </div>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
              <!-- <form class="navbar-form">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form> -->
			  {{--  
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification"><span>5</span></span>
                  <p class="d-lg-none d-md-block">
                    Notification
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="see-all">
                    <span>Show More..</span>
                  </a>
                </div>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li> -->
            </ul>
			  --}}
          </div>
        </div>
      </nav>
        <!-- End Navbar -->

        <div class="content mt-0">
          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <h6>Hello, {{ Auth::user()->email }}</h6>
                  <h2>Welcome to Blinkzap Premium</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
		

      <!-- MODAL ADD PRODUCT -->
      <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="add_product" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b>Location & Media</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <select class="form-control selectpicker" data-style="btn btn-link" title="Choose City" data-size="7" required="true" name="city">
                      <option value="" selected disabled>Choose City </option>
                      <option value="2">Paris </option>
                      <option value="3">Bucharest</option>
                      <option value="4">Rome</option>
                      <option value="5">New York</option>
                      <option value="6">Miami </option>
                    </select>
                  </div>
                </div>
                  <div class="col-6 col-sm-7">
                    <div class="form-group">
                      <select class="form-control selectpicker" data-style="btn btn-link" title="Choose City" data-size="7" required="true" name="media">
                        <option value="" selected disabled>Choose Media </option>
                        <option value="2">Billboard</option>
                        <option value="3">Videotron</option>
                        <option value="4">Wall Branding</option>
                        <option value="5">Baliho</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4 col-sm-3">
                    <div class="form-group">
                      <label for="mediaAmount"></label>
                      <input type="number" class="form-control" id="mediaAmount" placeholder="Amount" name="amount">
                    </div>
                  </div>
                  <div class="col-2 col-sm-2 text-right pl-0">
                    <button class="btn btn-warning px-2 btn-sm">
                      <i class="material-icons">add</i>
                    </button>
                  </div>
              </div>
              <h5 class="mt-3 mb-1 ml-2"><b>Result</b></h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th><b>Media</b></th>
                    <th><b>Amount</b></th>
                    <th><b>#</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Billboard</td>
                    <td>7</td>
                    <td class="td-actions">
                      <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger mr-2 btn-sm" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success btn-sm">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END MODAL -->
@stop