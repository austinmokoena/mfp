@extends('layouts.user_type.auth')

@section('content')

  <div class="section min-vh-85 position-relative transform-scale-0 transform-scale-md-7">
    <div class="container">
      <div class="row pt-2">
        <div class="col-lg-1 col-md-1 pt-5 pt-lg-0 ms-lg-5 text-center">
          <a href="javascript:;" class="avatar avatar-md border-0" data-bs-toggle="tooltip" data-bs-placement="left" title="My Profile">
            <img class="border-radius-lg" alt="Image placeholder" src="../assets/img/team-1.jpg">
          </a>
          <button class="btn btn-white border-radius-lg p-2 mt-2" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Home">
            <i class="fas fa-home p-2"></i>
          </button>
          <button class="btn btn-white border-radius-lg p-2" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Search">
            <i class="fas fa-search p-2"></i>
          </button>
          <button class="btn btn-white border-radius-lg p-2" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Minimize">
            <i class="fas fa-ellipsis-h p-2"></i>
          </button>
        </div>
        <div class="col-lg-8 col-md-11">
          <div class="d-flex">
            <div class="me-auto">
              <h1 class="display-1 font-weight-bold mt-n4 mb-0">28°C</h1>
              <h6 class="text-uppercase mb-0 ms-1">Cloudy</h6>
            </div>
            <div class="ms-auto">
              <img class="w-50 float-end mt-lg-n4" src="../assets/img/small-logos/icon-sun-cloud.png" alt="image sun">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-4 col-md-4">
              <!-- Create Lead Form -->
        <h2>Create Lead</h2>
        <form action="{{ route('create-lead') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="currency">Currency</label>
                <input type="text" id="currency" name="currency" required>
            </div>
            <div class="form-group">
                <label for="country_id">Country ID</label>
                <input type="text" id="country_id" name="country_id" required>
            </div>
            <div class="form-group">
                <button type="submit">Create Lead</button>
            </div>
        </form>

            </div>
            <div class="col-lg-4 col-md-4 mt-4 mt-sm-0">
              <div class="card bg-gradient-dark move-on-hover">
                <div class="card-body">
                  <div class="d-flex">
                    <h5 class="mb-0 text-white">To Do</h5>
                    <div class="ms-auto">
                      <h1 class="text-white text-end mb-0 mt-n2">7</h1>
                      <p class="text-sm mb-0 text-white">items</p>
                    </div>
                  </div>
                  <p class="text-white mb-0">Shopping</p>
                  <p class="mb-0 text-white">Meeting</p>
                </div>
                <a href="javascript:;" class="w-100 text-center py-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Show More">
                  <i class="fas fa-chevron-down text-white"></i>
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <div class="card-body">
                  <div class="d-flex">
                    <p class="mb-0">Emails (21)</p>
                    <a href="javascript:;" class="ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" title="Check your emails">
                      Check
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-4 mt-sm-0">
              <div class="card card-background card-background-mask-primary move-on-hover align-items-start">
                <div class="cursor-pointer">
                  <div class="full-background" style="background-image: url('../assets/img/curved-images/curved1.jpg')"></div>
                  <div class="card-body">
                    <h5 class="text-white mb-0">Some Kind Of Blues</h5>
                    <p class="text-white text-sm">Deftones</p>
                    <div class="d-flex mt-5">
                      <button class="btn btn-outline-white rounded-circle p-2 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Prev">
                        <i class="fas fa-backward p-2"></i>
                      </button>
                      <button class="btn btn-outline-white rounded-circle p-2 mx-2 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Pause">
                        <i class="fas fa-play p-2"></i>
                      </button>
                      <button class="btn btn-outline-white rounded-circle p-2 mb-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Next">
                        <i class="fas fa-forward p-2"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card move-on-hover mt-4">
                <!-- Client Activity Table -->
        <h2>Client Activity</h2>
        @if(isset($clientActivity['data']) && count($clientActivity['data']) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Activity</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientActivity['data'] as $activity)
                        <tr>
                            <td>{{ $activity['activity'] }}</td>
                            <td>{{ $activity['date'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="no-data">No client activity found.</p>
        @endif
              </div>
            </div>
            <div style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); padding: 24px; width: 80%; max-width: 100%;">
              <h1 style="font-size: 24px; font-weight: 600; margin-bottom: 20px; color: #4a4a4a;">Leads</h1>
              @if(isset($leads['data']) && count($leads['data']) > 0)
                  <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                      <thead>
                          <tr>
                              <th style="padding: 12px; text-align: left; border-bottom: 1px solid #e0e0e0; background-color: #f8f9fa; font-weight: 600; color: #555;">Name</th>
                              <th style="padding: 12px; text-align: left; border-bottom: 1px solid #e0e0e0; background-color: #f8f9fa; font-weight: 600; color: #555;">Email</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($leads['data'] as $lead)
                              <tr style="transition: background-color 0.2s;">
                                  <td style="padding: 12px; text-align: left; border-bottom: 1px solid #e0e0e0;">{{ $lead['name'] }}</td>
                                  <td style="padding: 12px; text-align: left; border-bottom: 1px solid #e0e0e0;">{{ $lead['email'] }}</td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              @else
                  <p style="text-align: center; color: #888; font-size: 16px;">No leads found.</p>
              @endif
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
