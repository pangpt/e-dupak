@extends('layouts.master')

@section('content')
<!-- HEADER -->
<div class="header">
    <div class="container-fluid">

      <!-- Body -->
      <div class="header-body">
        <div class="row align-items-end">
          <div class="col">

            <!-- Pretitle -->
            <h6 class="header-pretitle text-secondary">
              Overview
            </h6>

            <!-- Title -->
            <h1 class="header-title">
              Company Earnings
            </h1>

          </div>
          <div class="col-auto">

            <!-- Nav -->
            <ul class="nav nav-tabs header-tabs">
              <li class="nav-item" data-toggle="chart" data-target="#earningsChart" data-trigger="click" data-action="toggle" data-dataset="0">
                <a href="#" class="nav-link text-center active" data-toggle="tab">
                  <h6 class="header-pretitle text-secondary">
                    Earnings
                  </h6>
                  <h3 class="mb-0">
                    $19.2k
                  </h3>
                </a>
              </li>
              <li class="nav-item" data-toggle="chart" data-target="#earningsChart" data-trigger="click" data-action="toggle" data-dataset="1">
                <a href="#" class="nav-link text-center" data-toggle="tab">
                  <h6 class="header-pretitle text-secondary">
                    Sessions
                  </h6>
                  <h3 class="mb-0">
                    92.1k
                  </h3>
                </a>
              </li>
              <li class="nav-item" data-toggle="chart" data-target="#earningsChart" data-trigger="click" data-action="toggle" data-dataset="2">
                <a href="#" class="nav-link text-center" data-toggle="tab">
                  <h6 class="header-pretitle text-secondary">
                    Bounce
                  </h6>
                  <h3 class="mb-0">
                    50.2%
                  </h3>
                </a>
              </li>
            </ul>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .header-body -->

      <!-- Footer -->
      <div class="header-footer">

        <!-- Chart -->
        <div class="chart">
          <canvas id="earningsChart" class="chart-canvas"></canvas>
        </div>

      </div>

    </div>
  </div> <!-- / .header -->

  <!-- CARDS -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-xl-8">

        <!-- Projects -->
        <div class="card">
          <div class="card-header">

            <!-- Title -->
            <h4 class="card-header-title">
              Active Projects
            </h4>

            <!-- Button -->
            <a href="#!" class="btn btn-sm btn-white">
              Export
            </a>

          </div>
          <div class="table-responsive mb-0" data-list='{"valueNames": ["project-project", "project-status", "project-progress", "project-date"]}'>
            <table class="table table-sm table-nowrap card-table table-hover">
              <thead>
                <tr>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="project-project">
                      Project
                    </a>
                  </th>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="project-status">
                      Status
                    </a>
                  </th>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="project-progress">
                      Progress
                    </a>
                  </th>
                  <th>
                    <a href="#" class="text-muted list-sort" data-sort="project-date">
                      Due date
                    </a>
                  </th>
                  <th class="text-right">
                    Team
                  </th>
                  <th></th>
                </tr>
              </thead>
              <tbody class="list">
                <tr>
                  <td class="project-project">

                    <!-- Heading -->
                    <h4 class="font-weight-normal mb-1">Update the API</h4>

                    <!-- Text  -->
                    <small class="text-muted">Oki Doki Collective</small>

                  </td>
                  <td class="project-status">

                    <!-- Badge -->
                    <span class="badge badge-soft-warning">In progress</span>

                  </td>
                  <td class="project-progress">
                    <div class="d-flex align-items-center">

                      <!-- Value -->
                      <div class="mr-3">55%</div>

                      <!-- Progress -->
                      <div class="progress progress-sm" style="min-width: 40px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                    </div>
                  </td>
                  <td class="project-date">

                    <!-- Time -->
                    <time datetime="2018-10-24">07/24/18</time>

                  </td>
                  <td class="text-right">

                    <!-- Avatar group -->
                    <div class="avatar-group">
                      <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Dianna Smiley">
                        <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                        <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                        <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                        <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                    </div>

                  </td>
                  <td class="text-right">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                  </td>
                </tr>
                <tr>
                  <td class="project-project">

                    <!-- Heading -->
                    <h4 class="font-weight-normal mb-1">Release v1.2-Beta</h4>

                    <!-- Text -->
                    <small class="text-muted">Oki Doki Collective</small>

                  </td>
                  <td class="project-status">

                    <!-- Badge -->
                    <span class="badge badge-soft-warning">In progress</span>

                  </td>
                  <td class="project-progress">
                    <div class="d-flex align-items-center">

                      <!-- Value -->
                      <div class="mr-3">25%</div>

                      <!-- Progress -->
                      <div class="progress progress-sm" style="min-width: 40px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                    </div>
                  </td>
                  <td class="project-date">

                    <!-- Time -->
                    <time datetime="2018-10-24">08/26/18</time>

                  </td>
                  <td class="text-right">

                    <!-- Avatar group -->
                    <div class="avatar-group justify-content-end">
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Dianna Smiley">
                        <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                        <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                        <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                    </div>

                  </td>
                  <td class="text-right">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                  </td>
                </tr>
                <tr>
                  <td class="project-project">

                    <!-- Heading -->
                    <h4 class="font-weight-normal mb-1">GDPR Compliance</h4>

                    <!-- Text -->
                    <small class="text-muted">Oki Doki Collective</small>

                  </td>
                  <td class="project-status">

                    <!-- Badge -->
                    <span class="badge badge-soft-success">Completed</span>

                  </td>
                  <td class="project-progress">
                    <div class="d-flex align-items-center">

                      <!-- Value -->
                      <div class="mr-3">100%</div>

                      <!-- Progress -->
                      <div class="progress progress-sm" style="min-width: 40px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                    </div>
                  </td>
                  <td class="project-date">

                    <!-- Time -->
                    <time datetime="2018-10-24">06/19/18</time>

                  </td>
                  <td class="text-right">

                    <!-- Avatar group -->
                    <div class="avatar-group justify-content-end">
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Dianna Smiley">
                        <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                        <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                        <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                    </div>

                  </td>
                  <td class="text-right">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                  </td>
                </tr>
                <tr>
                  <td class="project-project">

                    <!-- Heading -->
                    <h4 class="font-weight-normal mb-1">v1.2 Documentation</h4>

                    <!-- Text  -->
                    <small class="text-muted">Oki Doki Collective</small>

                  </td>
                  <td class="project-status">

                    <!-- Badge -->
                    <span class="badge badge-soft-danger">Cancelled</span>

                  </td>
                  <td class="project-progress">
                    <div class="d-flex align-items-center">

                      <!-- Value -->
                      <div class="mr-3">0%</div>

                      <!-- Progress -->
                      <div class="progress progress-sm" style="min-width: 40px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                    </div>
                  </td>
                  <td class="project-date">

                    <!-- Time -->
                    <time datetime="2018-10-24">06/25/18</time>

                  </td>
                  <td class="text-right">

                    <!-- Avatar group -->
                    <div class="avatar-group justify-content-end">
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Dianna Smiley">
                        <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                        <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                    </div>

                  </td>
                  <td class="text-right">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fe fe-more-vertical"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                  </td>
                </tr>
                <tr>
                  <td class="project-project">

                    <!-- Heading -->
                    <h4 class="font-weight-normal mb-1">Plan design offsite</h4>

                    <!-- Text -->
                    <small class="text-muted">Oki Doki Collective</small>

                  </td>
                  <td class="project-status">

                    <!-- Badge -->
                    <span class="badge badge-soft-success">Completed</span>

                  </td>
                  <td class="project-progress">
                    <div class="d-flex align-items-center">

                      <!-- Value -->
                      <div class="mr-3">100%</div>

                      <!-- Progress -->
                      <div class="progress progress-sm" style="min-width: 40px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                    </div>
                  </td>
                  <td class="project-date">

                    <!-- Time -->
                    <time datetime="2018-10-24">06/30/18</time>

                  </td>
                  <td class="text-right">

                    <!-- Avatar group -->
                    <div class="avatar-group justify-content-end">
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Dianna Smiley">
                        <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                        <img src="assets/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                        <img src="assets/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                      <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                        <img src="assets/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                      </a>
                    </div>

                  </td>
                  <td class="text-right">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Kanban -->
        <div class="card">
          <div class="card-header">

            <!-- Title -->
            <h4 class="card-header-title">
              Kanban Tasks
            </h4>

            <!-- Button -->
            <a class="small" href="kanban.html">View Kanban</a>

          </div>
          <div class="card-body">

            <!-- Category -->
            <div class="kanban-category">

              <!-- Card -->
              <div class="kanban-item">
                <div class="card card-sm mb-3" data-toggle="modal" data-target="#modalKanbanTask">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">

                        <!-- Text -->
                        <p class="mb-0">
                          Create the release notes for the new pages so customers are warned.
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Time -->
                        <time class="small text-danger" datetime="2019-06-09">
                          <i class="fe fe-clock mr-1"></i> Jun 9
                        </time>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card -->
              <div class="kanban-item">
                <div class="card card-sm mb-3" data-toggle="modal" data-target="#modalKanbanTask">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">

                        <!-- Text -->
                        <p class="mb-0">
                          This is a todo with an attachment, comments, and a due date.
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Time -->
                        <time class="small text-muted" datetime="2019-06-09">
                          <i class="fe fe-clock mr-1"></i> Jun 9
                        </time>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card -->
              <div class="kanban-item">
                <div class="card card-sm mb-3" data-toggle="modal" data-target="#modalKanbanTask">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">

                        <!-- Text -->
                        <p class="mb-0">
                          This is an extremely long todo to show wrapping. This is an extremely long todo to show wrapping.This is an extremely long todo to show wrapping.
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Time -->
                        <time class="small text-muted" datetime="2019-06-09">
                          <i class="fe fe-clock mr-1"></i> Jun 9
                        </time>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <!-- Add -->
            <div class="card card-sm mb-0">
              <div class="card-body">

                <!-- Form -->
                <form class="kanban-add-form">
                  <div class="row align-items-center">
                    <div class="col">

                      <!-- Input -->
                      <textarea class="form-control form-control-flush form-control-auto" data-toggle="autosize" rows="1" placeholder="Draft your card"></textarea>

                    </div>
                    <div class="col-auto">
                      <div class="d-flex align-items-center">

                        <!-- Icon -->
                        <span class="text-muted small mr-2">
                          <i class="fe fe-clock"></i>
                        </span>

                        <!-- Input -->
                        <input type="text" class="form-control form-control-sm form-control-flush form-control-auto text-muted" data-toggle="flatpickr" data-options='{"dateFormat": "M j"}' placeholder="No due date">

                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>

          </div>
        </div>

        <!-- Stats -->
        <div class="row">
          <div class="col-12 col-lg-6">

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Budget
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      $24,500
                    </span>

                    <!-- Badge -->
                    <span class="badge badge-soft-success mt-n1">
                      +3.5%
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6">

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Total Hours
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      763.5
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6">

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Progress
                    </h6>

                    <div class="row align-items-center no-gutters">
                      <div class="col-auto">

                        <!-- Heading -->
                        <span class="h2 mr-2 mb-0">
                          84.5%
                        </span>

                      </div>
                      <div class="col">

                        <!-- Progress -->
                        <div class="progress progress-sm">
                          <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                      </div>
                    </div> <!-- / .row -->

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6">

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Cost/Unit
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      $5.50
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Chart -->
                    <div class="chart chart-sparkline">
                      <canvas class="chart-canvas" id="sparklineChart"></canvas>
                    </div>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

          </div>
        </div> <!-- / .row -->

        <!-- Checklist -->
        <div class="card">
          <div class="card-header">

            <!-- Title -->
            <h4 class="card-header-title">
              Scratchpad Checklist
            </h4>

            <!-- Badge -->
            <span class="badge badge-soft-secondary">
              23 Complete Items
            </span>

          </div>
          <div class="card-body">

            <!-- Checklist -->
            <div class="checklist">
              <div class="custom-control custom-checkbox checklist-control">
                <input class="custom-control-input" id="checklistTwo" type="checkbox" />
                <label class="custom-control-label" for="checklistTwo"></label>
                <span class="custom-control-caption">
                  Delete the old mess in functions files.
                </span>
              </div>
              <div class="custom-control custom-checkbox checklist-control">
                <input class="custom-control-input" id="checklistThree" type="checkbox" />
                <label class="custom-control-label" for="checklistThree"></label>
                <span class="custom-control-caption">
                  Create the release notes for the new pages so customers get psyched.
                </span>
              </div>
              <div class="custom-control custom-checkbox checklist-control">
                <input class="custom-control-input" id="checklistFour" type="checkbox" />
                <label class="custom-control-label" for="checklistFour"></label>
                <span class="custom-control-caption">
                  Send Dianna those meeting notes
                </span>
              </div>
              <div class="custom-control custom-checkbox checklist-control">
                <input class="custom-control-input" id="checklistFive" type="checkbox" />
                <label class="custom-control-label" for="checklistFive"></label>
                <span class="custom-control-caption">
                  Share the documentation for the new unified API
                </span>
              </div>
              <div class="custom-control custom-checkbox checklist-control">
                <input class="custom-control-input" id="checklistSix" type="checkbox" checked />
                <label class="custom-control-label" for="checklistSix"></label>
                <span class="custom-control-caption">
                  Clean up the Figma file with all of the avatars, buttons, and other
                  components.
                </span>
              </div>
            </div>

          </div> <!-- / .card-body -->
          <div class="card-footer">
            <div class="row align-items-center">
              <div class="col">

                <!-- Input -->
                <textarea class="form-control form-control-flush form-control-auto" data-toggle="autosize" rows="1" placeholder="Create a task"></textarea>

              </div>
              <div class="col-auto">

                <!-- Button -->
                <button class="btn btn-sm btn-primary">
                  Add
                </button>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .card-footer -->
        </div>

      </div>
      <div class="col-12 col-xl-4">

        <!-- Activity -->
        <div class="card">
          <div class="card-header">

            <!-- Title -->
            <h4 class="card-header-title">
              Recent Activity
            </h4>

            <!-- Button -->
            <a class="small" href="#!">View all</a>

          </div>
          <div class="card-body">

            <!-- List group -->
            <div class="list-group list-group-flush list-group-activity my-n3">
              <div class="list-group-item">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                        <i class="fe fe-mail"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Launchday 1.4.0 update email sent
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Sent to all 1,851 subscribers over a 24 hour period
                    </p>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="list-group-item">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                        <i class="fe fe-archive"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      New project "Goodkit" created
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      Looks like there might be a new theme soon.
                    </p>

                    <!-- Time -->
                    <small class="text-muted">
                      2h ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="list-group-item">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                        <i class="fe fe-code"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      Dashkit 1.5.0 was deployed.
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      A successful to deploy to production was executed.
                    </p>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="list-group-item">
                <div class="row">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <div class="avatar-title font-size-lg bg-primary-soft rounded-circle text-primary">
                        <i class="fe fe-git-branch"></i>
                      </div>
                    </div>

                  </div>
                  <div class="col ml-n2">

                    <!-- Heading -->
                    <h5 class="mb-1">
                      "Update Dependencies" branch was created.
                    </h5>

                    <!-- Text -->
                    <p class="small text-gray-700 mb-0">
                      This branch was created off of the "master" branch.
                    </p>

                    <!-- Time -->
                    <small class="text-muted">
                      2m ago
                    </small>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
        </div>

        <!-- Uploads -->
        <div class="card">
          <div class="card-header">

            <!-- Title -->
            <h4 class="card-header-title">
              Latest Uploads
            </h4>

            <!-- Link -->
            <a href="#!" class="small">View all</a>

          </div>
          <div class="card-body">

            <!-- List group -->
            <div class="list-group list-group-flush my-n3">
              <div class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <a href="#!" class="avatar">
                      <img src="assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                    </a>

                  </div>
                  <div class="col ml-n2">

                    <!-- Title -->
                    <h4 class="font-weight-normal mb-1">
                      <a href="#!">Launchday Logo</a>
                    </h4>

                    <!-- Text -->
                    <small class="text-muted">
                      2.5kb SVG
                    </small>

                  </div>
                  <div class="col-auto">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <a href="#!" class="avatar">
                      <img src="assets/img/files/file-2.jpg" alt="..." class="avatar-img rounded">
                    </a>

                  </div>
                  <div class="col ml-n2">

                    <!-- Title -->
                    <h4 class="font-weight-normal mb-1">
                      <a href="#!">Example Grid</a>
                    </h4>

                    <!-- Text -->
                    <small class="text-muted">
                      1.5mb PNG
                    </small>

                  </div>
                  <div class="col-auto">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <a href="#!" class="avatar">
                      <div class="avatar-title rounded bg-white text-secondary">
                        <span class="fe fe-folder"></span>
                      </div>
                    </a>

                  </div>
                  <div class="col ml-n2">

                    <!-- Title -->
                    <h4 class="font-weight-normal mb-1">
                      <a href="#!">Screenshot Collection</a>
                    </h4>

                    <!-- Text -->
                    <small class="text-muted">
                      6.9mb directory
                    </small>

                  </div>
                  <div class="col-auto">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="list-group-item">
                <div class="row align-items-center">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <a href="#!" class="avatar">
                      <img src="assets/img/files/file-3.jpg" alt="..." class="avatar-img rounded">
                    </a>

                  </div>
                  <div class="col ml-n2">

                    <!-- Title -->
                    <h4 class="font-weight-normal mb-1">
                      <a href="#!">Launchday Cover</a>
                    </h4>

                    <!-- Text -->
                    <small class="text-muted">
                      750kb JPG
                    </small>

                  </div>
                  <div class="col-auto">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div> <!-- / .card-body -->
        </div>

        <!-- Traffic -->
        <div class="card">
          <div class="card-header">

            <!-- Title -->
            <h4 class="card-header-title">
              Traffic Channels
            </h4>

            <!-- Tabs -->
            <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
              <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="0">
                <a href="#" class="nav-link active" data-toggle="tab">
                  All
                </a>
              </li>
              <li class="nav-item" data-toggle="chart" data-target="#trafficChart" data-trigger="click" data-action="toggle" data-dataset="1">
                <a href="#" class="nav-link" data-toggle="tab">
                  Direct
                </a>
              </li>
            </ul>

          </div>
          <div class="card-body">

            <!-- Chart -->
            <div class="chart chart-appended">
              <canvas id="trafficChart" class="chart-canvas" data-toggle="legend" data-target="#trafficChartLegend"></canvas>
            </div>

            <!-- Legend -->
            <div id="trafficChartLegend" class="chart-legend"></div>

          </div>
        </div>

      </div>
    </div> <!-- / .row -->
  </div>
@endsection
