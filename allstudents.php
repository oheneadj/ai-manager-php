<?php 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Students | AI Training Manager</title>
    <!-- Head-->
    <?php require_once'./includes/head.php'; ?>
  </head>

  <body data-layout="horizontal" data-topbar="dark">
    <!-- Loader -->
    <?php require_once'./includes/preloader.php'; ?>

    <!-- Begin page -->
    <div id="layout-wrapper">
     <!-- Header --> 
    <?php require_once'./includes/header.php'; ?>

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div
                  class="page-title-box d-flex align-items-center justify-content-between"
                >
                  <h4 class="mb-0">Welcome, Ohene</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class=" mx-3">
                      <a
                            href="javascript: void(0);"
                            class="btn btn-primary waves-effect waves-light"
                            >Add New Student <i class="mdi mdi-account-plus"></i></a
                          >
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="float-end mt-2">
                      <div
                        id="total-revenue-chart"
                        data-colors='["--bs-primary"]'
                      ></div>
                    </div>
                    <div>
                      <h4 class="mb-1 mt-1">
                        <span data-plugin="counterup">34,152</span>
                      </h4>
                      <p class="text-muted mb-0">Total Students</p>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                      <span class="text-success me-1"
                        ><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span
                      >
                      since last week
                    </p>
                  </div>
                </div>
              </div>
              <!-- end col-->

              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="float-end mt-2">
                      <div
                        id="orders-chart"
                        data-colors='["--bs-success"]'
                      ></div>
                    </div>
                    <div>
                      <h4 class="mb-1 mt-1">
                        <span data-plugin="counterup">5,643</span>
                      </h4>
                      <p class="text-muted mb-0">Completed</p>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                      <span class="text-danger me-1"
                        ><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span
                      >
                      since last week
                    </p>
                  </div>
                </div>
              </div>
              <!-- end col-->

              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="float-end mt-2">
                      <div
                        id="customers-chart"
                        data-colors='["--bs-primary"]'
                      ></div>
                    </div>
                    <div>
                      <h4 class="mb-1 mt-1">
                        <span data-plugin="counterup">45,254</span>
                      </h4>
                      <p class="text-muted mb-0">Active Students</p>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                      <span class="text-danger me-1"
                        ><i class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span
                      >
                      since last week
                    </p>
                  </div>
                </div>
              </div>
              <!-- end col-->

              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="float-end mt-2">
                      <div
                        id="growth-chart"
                        data-colors='["--bs-warning"]'
                      ></div>
                    </div>
                    <div>
                      <h4 class="mb-1 mt-1">
                        + <span data-plugin="counterup">12.58</span>%
                      </h4>
                      <p class="text-muted mb-0">Growth</p>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                      <span class="text-success me-1"
                        ><i class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span
                      >
                      since last week
                    </p>
                  </div>
                </div>
              </div>
              <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-2">All Students</h4>
                                        
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered table-centered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead class="table-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>
                              <button
                                type="button"
                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                              >
                                View Details
                              </button>
                            </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

 <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-4">All Students</h4>
                    <div class="table-responsive">
                      <table class="table table-centered table-nowrap mb-0">
                        <thead class="table-light">
                          <tr>
                            <th style="width: 20px">
                              <div class="form-check font-size-16">
                                <input
                                  type="checkbox"
                                  class="form-check-input"
                                  id="customCheck1"
                                />
                                <label
                                  class="form-check-label"
                                  for="customCheck1"
                                  >&nbsp;</label
                                >
                              </div>
                            </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check font-size-16">
                                <input
                                  type="checkbox"
                                  class="form-check-input"
                                  id="customCheck2"
                                />
                                <label
                                  class="form-check-label"
                                  for="customCheck2"
                                  >&nbsp;</label
                                >
                              </div>
                            </td>
                            <td>
                              <a
                                href="javascript: void(0);"
                                class="text-body fw-bold"
                                >#MB2540</a
                              >
                            </td>
                            <td>Neal Matthews</td>
                            <td>07 Oct, 2019</td>
                            <td>$400</td>
                            <td>
                              <span
                                class="badge rounded-pill bg-soft-success font-size-12"
                                >Paid</span
                              >
                            </td>
                            <td>
                              <i class="fab fa-cc-mastercard me-1"></i>
                              Mastercard
                            </td>
                            <td>
                              <button
                                type="button"
                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                              >
                                View Details
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <div class="form-check font-size-16">
                                <input
                                  type="checkbox"
                                  class="form-check-input"
                                  id="customCheck3"
                                />
                                <label
                                  class="form-check-label"
                                  for="customCheck3"
                                  >&nbsp;</label
                                >
                              </div>
                            </td>
                            <td>
                              <a
                                href="javascript: void(0);"
                                class="text-body fw-bold"
                                >#MB2541</a
                              >
                            </td>
                            <td>Jamal Burnett</td>
                            <td>07 Oct, 2019</td>
                            <td>$380</td>
                            <td>
                              <span
                                class="badge rounded-pill bg-soft-danger font-size-12"
                                >Chargeback</span
                              >
                            </td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                              <button
                                type="button"
                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                              >
                                View Details
                              </button>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <div class="form-check font-size-16">
                                <input
                                  type="checkbox"
                                  class="form-check-input"
                                  id="customCheck4"
                                />
                                <label
                                  class="form-check-label"
                                  for="customCheck4"
                                  >&nbsp;</label
                                >
                              </div>
                            </td>
                            <td>
                              <a
                                href="javascript: void(0);"
                                class="text-body fw-bold"
                                >#MB2542</a
                              >
                            </td>
                            <td>Juan Mitchell</td>
                            <td>06 Oct, 2019</td>
                            <td>$384</td>
                            <td>
                              <span
                                class="badge rounded-pill bg-soft-success font-size-12"
                                >Paid</span
                              >
                            </td>
                            <td>
                              <i class="fab fa-cc-paypal me-1"></i> Paypal
                            </td>
                            <td>
                              <button
                                type="button"
                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                              >
                                View Details
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check font-size-16">
                                <input
                                  type="checkbox"
                                  class="form-check-input"
                                  id="customCheck5"
                                />
                                <label
                                  class="form-check-label"
                                  for="customCheck5"
                                  >&nbsp;</label
                                >
                              </div>
                            </td>
                            <td>
                              <a
                                href="javascript: void(0);"
                                class="text-body fw-bold"
                                >#MB2543</a
                              >
                            </td>
                            <td>Barry Dick</td>
                            <td>05 Oct, 2019</td>
                            <td>$412</td>
                            <td>
                              <span
                                class="badge rounded-pill bg-soft-success font-size-12"
                                >Paid</span
                              >
                            </td>
                            <td>
                              <i class="fab fa-cc-mastercard me-1"></i>
                              Mastercard
                            </td>
                            <td>
                              <button
                                type="button"
                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                              >
                                View Details
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check font-size-16">
                                <input
                                  type="checkbox"
                                  class="form-check-input"
                                  id="customCheck6"
                                />
                                <label
                                  class="form-check-label"
                                  for="customCheck6"
                                  >&nbsp;</label
                                >
                              </div>
                            </td>
                            <td>
                              <a
                                href="javascript: void(0);"
                                class="text-body fw-bold"
                                >#MB2544</a
                              >
                            </td>
                            <td>Ronald Taylor</td>
                            <td>04 Oct, 2019</td>
                            <td>$404</td>
                            <td>
                              <span
                                class="badge rounded-pill bg-soft-warning font-size-12"
                                >Refund</span
                              >
                            </td>
                            <td><i class="fab fa-cc-visa me-1"></i> Visa</td>
                            <td>
                              <button
                                type="button"
                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                              >
                                View Details
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check font-size-16">
                                <input
                                  type="checkbox"
                                  class="form-check-input"
                                  id="customCheck7"
                                />
                                <label
                                  class="form-check-label"
                                  for="customCheck7"
                                  >&nbsp;</label
                                >
                              </div>
                            </td>
                            <td>
                              <a
                                href="javascript: void(0);"
                                class="text-body fw-bold"
                                >#MB2545</a
                              >
                            </td>
                            <td>Jacob Hunter</td>
                            <td>04 Oct, 2019</td>
                            <td>$392</td>
                            <td>
                              <span
                                class="badge rounded-pill bg-soft-success font-size-12"
                                >Paid</span
                              >
                            </td>
                            <td>
                              <i class="fab fa-cc-paypal me-1"></i> Paypal
                            </td>
                            <td>
                              <button
                                type="button"
                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                              >
                                View Details
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- end table-responsive -->
                  </div>
                </div>
              </div>
            </div>
            <!-- end row -->
          </div>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
         <!-- Footer -->
        <?php require_once'./includes/footer.php'; ?>
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right side bar -->
    <?php require_once'./includes/rightside-bar.php'; ?>
    <!-- Scripts -->
    <?php require_once'./includes/scripts.php'; ?>

  </body>
</html>
