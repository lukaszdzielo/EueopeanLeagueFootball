<?php include 'elements/_html_start.php' ?>

<?php include 'elements/_head.php' ?>

<?php include 'elements/side_menu.php' ?>

<main>

    <?php include 'elements/top_bar.php' ?>

    <div class="container-fluid pt-8 px-sm-8 overflow-hidden">
        <form>
            <div class="accordion mb-4" id="accordionExample">
                <div id="collapseAddNewPlayer" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="row g-8">
                        <div class="col-sm-auto">
                            <div class="avatar upload">
                                <!-- <img src="../files/Players/Williams_Trent.png"> -->
                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                                <button class="btn btn-upload"><svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 7v2.99s-1.99.01-2 0V7h-3s.01-1.99 0-2h3V2h2v3h3v2h-3zm-3 4V8h-3V5H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8h-3zM5 19l3-4 2 3 3-4 4 5H5z"/></svg></button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row g-4 gx-lg-8">
                                <div class="col-md-6 col-xl-4 col-xxl-3">
                                    <label for="firstName" class="form-label">First Name*</label>
                                    <input type="email" class="form-control" id="firstName" placeholder="First Name">
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3">
                                    <label for="lastName" class="form-label">Last Name*</label>
                                    <input type="email" class="form-control" id="lastName" placeholder="Last Name">
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3">
                                    <label for="position" class="form-label">Position*</label>
                                    <input type="email" class="form-control" id="position" placeholder="Last Name">
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3">
                                    <label for="position" class="form-label">Position*</label>
                                    <input type="email" class="form-control" id="position" placeholder="Last Name">
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3">
                                    <label for="position" class="form-label">Position*</label>
                                    <input type="email" class="form-control" id="position" placeholder="Last Name">
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3">
                                    <label for="position" class="form-label">Position*</label>
                                    <input type="email" class="form-control" id="position" placeholder="Last Name">
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3">
                                    <label for="position" class="form-label">Position*</label>
                                    <input type="email" class="form-control" id="position" placeholder="Last Name">
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3">
                                    <label for="position" class="form-label">Position*</label>
                                    <input type="email" class="form-control" id="position" placeholder="Last Name">
                                </div>

                                <div class="col-12 mt-12">
                                    <div class="form-check btn-collapse">
                                        <label class="form-check-label" for="additionalFieldsLabel">Additional fields</label>
                                        <input class="form-check-input collapsed" type="checkbox" data-bs-toggle="collapse" data-bs-target="#additionalFields" id="additionalFieldsLabel">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div id="additionalFields" class="collapse">
                                        <div class="row g-4 gx-8">
                                            <div class="col-auto">
                                                <label for="covidStatus" class="form-label">Covid-19 Status</label>
                                                <select id="covidStatus" class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <label for="footballExperience" class="form-label">First Football Experience</label>
                                                <select id="footballExperience" class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-auto">
                                                <label for="covidStatus" class="form-label">Jersey Number</label>
                                                <input type="text" id="covidStatus" class="form-control">
                                            </div>
                                            <div class="col-auto">
                                                <div class="row g-3">
                                                    <div class="col-auto">
                                                        <label for="weight" class="form-label">Weight</label>
                                                        <input type="text" id="weight" class="form-control" style="width: 160px;">
                                                    </div>
                                                    <div class="col-auto">
                                                        <label class="form-label">&nbsp;</label>
                                                        <select id="footballExperience" class="form-select w-auto">
                                                            <option selected>kg</option>
                                                            <option value="1">kg</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="row g-3">
                                                    <div class="col-auto">
                                                        <label for="height" class="form-label">Height</label>
                                                        <input type="text" id="height" class="form-control" style="width: 160px;">
                                                    </div>
                                                    <div class="col-auto">
                                                        <label class="form-label">&nbsp;</label>
                                                        <select id="footballExperience" class="form-select w-auto">
                                                            <option selected>cm</option>
                                                            <option value="1">cm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label for="salaryCapCategory" class="form-label">Salary Cap Category</label>
                                                <select id="salaryCapCategory" class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 ms-auto">
                            <div class="row justify-content-end align-items-end g-4">
                                <div class="col-auto">
                                    <button class="btn btn-quaternary btn-lg justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cancel</button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-tertiary btn-lg justify-content-center" type="button">Add player</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="row g-4 gx-lg-8">
                        <div class="col-sm-6 col-xl-4 col-xxl-3">
                            <label class="form-label d-none d-sm-block">&nbsp;</label>
                            <div class="search input-group">
                                <label class="input-group-text" id="basic-addon1" for="searchPlayer">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                                </label>
                                <input type="text" id="searchPlayer" class="form-control" placeholder="Search for a player">
                            </div>
                            <!-- <label class="form-label d-none d-sm-block">&nbsp;</label>
                            <input type="email" class="form-control" id="search"> -->
                        </div>
                        <div class="col-sm-6 col-xl-4 col-xxl-3">
                            <label for="licenseStatus" class="form-label">License status</label>
                            <input type="email" class="form-control" id="licenseStatus">
                        </div>
                        <div class="col-sm-6 col-xl-4 col-xxl-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="email" class="form-control" id="position">
                        </div>
                        <div class="col-sm-6 col-xl-4 col-xxl-3 ms-auto">
                            <div class="row justify-content-end align-items-end g-4">
                                <div class="col-12 d-none d-sm-block d-xl-none d-xxl-block m-0">
                                    <label class="form-label">&nbsp;</label>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-lg btn-tertiary justify-content-center text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAddNewPlayer" aria-expanded="true" aria-controls="collapseOne">Add a new player</button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-tertiary justify-content-center text-center collapsed" type="button">
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
                                        <span class="text ms-2">Import csv file</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="pb-14">
            <div class="row mb-4">
                <div class="col-auto">
                    <div class="text-gray-550 fw-bold">20 players</div>
                    <!-- <div class="text-gray-550 fw-bold">No Players have been have been added yet</div> -->
                </div>
                <div class="col-auto ms-auto">
                    <a href="#" class="btn btn-file" type="button">
                        <span class="text">download example csv file</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th style="width: 0;"><div>Image</div></th>
                            <th><div class="name">Player name</div></th>
                            <th><div>Nationality</div></th>
                            <th><div>Position</div></th>
                            <th><div>No. of license<br>docs uploaded</div></th>
                            <th><div>Profile<br>completion</div></th>
                            <th><div>License<br>status</div></th>
                            <th><div>Created</div></th>
                            <th><div>Submitted</div></th>
                            <th style="width: 0;"><div>Profile</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- display a minimum of 5 rows. always display odd number of tr  -->
                        <tr>
                            <td><div class="avatar"><img src="../files/Players/Williams_Trent.png"></div></td>
                            <td><div class="name">Trent Williams</div></td>
                            <td><div class="flag"><img src="../files/flags/United_States.png"></div></td>
                            <td><div>QB</div></td>
                            <td><div class="fractions"><sup>7</sup><hr><sub>7</sub></div></td>
                            <td><div class="completion" style="--completion-color: #219653;">100%</div></td>
                            <td><div class="status" style="--status-color:#29A3EF;"></div></td>
                            <td><div class="time">Just now</div></td>
                            <td><div class="">Not submitted<br>yet</div></td>
                            <td><div class="justify-content-start">
                                <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#quickViewProfile">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                    <!-- <span class="badge left">4</span> -->
                                </button>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="avatar"><img src="../files/Players/Jones_Chandler.png"></div></td>
                            <td><div class="name">Chandler Jones</div></td>
                            <td><div class="flag"><img src="../files/flags/United_States.png"><img src="../files/flags/Germany.png"></div></td>
                            <td><div>RB</div></td>
                            <td><div class="fractions"><sup>7</sup><hr><sub>7</sub></div></td>
                            <td><div class="completion" style="--completion-color: #219653;">100%</div></td>
                            <td><div class="status" style="--status-color:#EB5757;"></div></td>
                            <td><div class="time">5 mins ago</div></td>
                            <td><div class="time">5 hr ago</div></td>
                            <td><div class="justify-content-start">
                                <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#quickViewProfile">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                    <!-- <span class="badge left">4</span> -->
                                </button>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="avatar"><img src="../files/Players/Whitworth_Andrew.png"></div></td>
                            <td><div class="name">Andrew Whitworth</div></td>
                            <td><div class="flag"><img src="../files/flags/United_States.png"></div></td>
                            <td><div>WR</div></td>
                            <td><div class="fractions"><sup>3</sup><hr><sub>7</sub></div></td>
                            <td><div class="completion" style="--completion-color: #F2994A;">60%</div></td>
                            <td><div class="status" style="--status-color:#828282;"></div></td>
                            <td><div class="time">2 hrs ago</div></td>
                            <td><div class="">Not submitted<br>yet</div></td>
                            <td><div class="justify-content-start">
                                <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#quickViewProfile">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                    <!-- <span class="badge left">4</span> -->
                                </button>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="avatar"><img src="../files/Players/Jones_Chandler.png"></div></td>
                            <td><div class="name">Chandler Jones</div></td>
                            <td><div class="flag"><img src="../files/flags/United_States.png"></div></td>
                            <td><div>TE</div></td>
                            <td><div class="fractions"><sup>2</sup><hr><sub>7</sub></div></td>
                            <td><div class="completion" style="--completion-color: #219653;">100%</div></td>
                            <td><div class="status" style="--status-color:#F2994A;"></div></td>
                            <td><div class="time">2 days ago</div></td>
                            <td><div class="time">1 day ago</div></td>
                            <td><div class="justify-content-start">
                                <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#quickViewProfile">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                    <!-- <span class="badge left">4</span> -->
                                </button>
                            </div></td>
                        </tr>
                        <tr>
                            <td><div class="avatar"><img src="../files/Players/Koch_Sam.png"></div></td>
                            <td><div class="name">Sam Koch</div></td>
                            <td><div class="flag"><img src="../files/flags/United_States.png"></div></td>
                            <td><div>OL</div></td>
                            <td><div class="fractions"><sup>7</sup><hr><sub>7</sub></div></td>
                            <td><div class="completion" style="--completion-color: #219653;">100%</div></td>
                            <td><div class="status" style="--status-color:#219653;"></div></td>
                            <td><div class="time">2 weeks ago</div></td>
                            <td><div class="time">4 days ago</div></td>
                            <td><div class="justify-content-start">
                                <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#quickViewProfile">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg>
                                    <!-- <span class="badge left">4</span> -->
                                </button>
                            </div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-between align-items-center g-4 pb-16">
            <div class="col-md-auto text-center">
                <div>1 of 4</div>
            </div>
            <div class="col-md-auto">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center d-sm-none m-0">
                        <li class="page-item"><a class="page-link" href="#"><<</a></li>
                        <li class="page-item"><a class="page-link" href="#"><</a></li>
                        <li class="page-item active">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                                <option value="3">9</option>
                                <option value="3">456</option>
                            </select>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">></a></li>
                        <li class="page-item"><a class="page-link" href="#">>></a></li>
                    </ul>
                    <ul class="pagination justify-content-center d-none d-sm-flex m-0">
                        <!-- <li class="page-item"><a class="page-link" href="#"><< First</a></li> -->
                        <li class="page-item"><a class="page-link" href="#">< Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next ></a></li>
                        <li class="page-item"><a class="page-link" href="#">Last >></a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

</main>

<?php include 'elements/quickViewProfile.php' ?>

<?php include 'elements/fileModal.php' ?>

<?php include 'elements/_footer_scripts.php' ?>

<?php include 'elements/_html_end.php' ?>