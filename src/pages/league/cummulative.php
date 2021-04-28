<?php
include_once PAGE_PARTIALS_PATH . DS . 'header.php';
?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="form-inline">
                    <a href="/league" class="btn btn-blue btn-sm mr-2">
                        Current
                    </a>
                    <div class="form-group">
                        <div class="input-group input-group-sm">
                            <select class="form-control my-1 my-md-0">
                                <option>Select Month</option>
                                <option>January</option>
                                <option>Febuary</option>
                                <option selected>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                    </div>
                    <a href="/league/cummulative" class="btn btn-blue btn-sm ml-2">
                        Cummulative
                    </a>                    
                </form>
            </div>
            <h4 class="page-title">Revenue League</h4>
        </div>
    </div>
</div>  


<div class="row">
    <div class="col-xl-12">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                </div>
            </div>

            <h4 class="header-title mb-3">PLATEAU STATE REVENUE LEAGUE
            </h4>

            <div class="table-responsive">
                <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                    <thead class="thead-light">
                        <tr>
                            <th class="font-weight-medium">LEAGUE POSITION</th>
                            <th class="font-weight-medium"> NAME </th>
                            <th class="font-weight-medium text-right">2021 Budget</th>
                            <th class="font-weight-medium text-right">League Monthly Target</th>
                            <!-- <th class="font-weight-medium">January League Points</th> -->
                            <!-- <th class="font-weight-medium">February League Points</th> -->
                            <!-- <th class="font-weight-medium">March League Points</th> -->
                            <!-- <th class="font-weight-medium">Total % Contribution To Pool</th> -->
                            <th class="font-weight-medium text-right">Total % League Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-white" style="background-color: #3e6551;">
                            <td style="width: 36px;">1</td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-white"> MINISTRY OF JUSTICE - PLATEAU STATE </h5>
                            </td>
                            <td class="text-right">10,150,000</td>
                            <td class="text-right">845,833 </td>
                            <!-- <td>1495</td> -->
                            <!-- <td>12</td>
                            <td>7</td>
                            <td>0.171</td> -->
                            <td class="text-right">1514</td>
                        </tr>
                        <tr class="bg-success">
                            <td style="width: 36px;">2</td>
                            <td>
                                <h5 class="m-0 font-weight-normal"> COLLEGE OF HEALTH TECHNOLOGY, PANKSHIN</h5>
                            </td>
                            <td class="text-right">80,235,000</td>
                            <td class="text-right">6,686,250</td>
                            <!-- <td>819</td> -->
                            <!-- <td>248</td>
                            <td>28</td>
                            <td>0.979</td> -->
                            <td class="text-right">1096</td>
                        </tr>

                        <tr class="bg-soft-success">
                            <td style="width: 36px;">3</td>
                            <td> PLATEAU STATE POLYTECHNIC BARKIN LADI (MAIN/HRDC) </td>
                            <td class="text-right">16343641372.00</td>
                            <td class="text-right">1361970114.33</td>
                            <!-- <td>81.78</td>
                            <td>181.50</td>
                            <td>674.58</td>
                            <td>87.46</td> -->
                            <td class="text-right">937.86</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td> JOS MAIN MARKET AUTHORITY - PLATEAU STATE </td>
                            <td class="text-right">125500000.00</td>
                            <td class="text-right">10458333.33</td>
                            <!-- <td>0.00</td>
                            <td>18.71</td>
                            <td>904.80</td>
                            <td>0.62</td> -->
                            <td class="text-right">923.51</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td> HIGH COURT OF JUSTICE - PLATEAU STATE </td>
                            <td class="text-right">54181000.00</td>
                            <td class="text-right">4515083.33</td>
                            <!-- <td>163.69</td>
                            <td>299.45</td>
                            <td>289.94</td>
                            <td>0.16</td> -->
                            <td class="text-right">753.08</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td> PLATEAU STATE INTERNAL REVENUE SERVICE </td>
                            <td class="text-right">200000000.00</td>
                            <td class="text-right">16666666.67</td>
                            <!-- <td>345.40</td>
                            <td>61.75</td>
                            <td>73.30</td>
                            <td>1.03</td> -->
                            <td class="text-right">480.45</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td> PLATEAU STATE LOCAL GOVERNMENT AUDIT </td>
                            <td class="text-right">56500000.00</td>
                            <td class="text-right">4708333.33</td>
                            <!-- <td>150.00</td>
                            <td>325.00</td>
                            <td>0.00</td>
                            <td>0.19</td> -->
                            <td class="text-right">475.00</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td> PLATEAU STATE SPECIALIST HOSPITAL </td>
                            <td class="text-right">21000000.00</td>
                            <td class="text-right">1750000.00</td>
                            <!-- <td>197.02</td>
                            <td>127.17</td>
                            <td>137.82</td>
                            <td>0.04</td> -->
                            <td class="text-right">462.01</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td> PLATEAU STATE LOCAL GOVERNMENT SERVICE </td>
                            <td class="text-right">47100000.00</td>
                            <td class="text-right">3925000.00</td>
                            <!-- <td>19.20</td>
                            <td>80.40</td>
                            <td>359.28</td>
                            <td>0.40</td> -->
                            <td class="text-right">458.88</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td> COLLEGE OF NURSING AND MIDWIFERY VOM </td>
                            <td class="text-right">480000.00</td>
                            <td class="text-right">40000.00</td>
                            <!-- <td>247.70</td>
                            <td>108.87</td>
                            <td>86.96</td>
                            <td>0.00</td> -->
                            <td class="text-right">443.53</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td> MINISTRY OF INFORMATION AND COMMUNICATION </td>
                            <td class="text-right">149100000.00</td>
                            <td class="text-right">12425000.00</td>
                            <!-- <td>102.00</td>
                            <td>48.00</td>
                            <td>204.00</td>
                            <td>0.38</td> -->
                            <td class="text-right">354.00</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td> PLATEAU RADIO TELEVISION CORPORATION-TV </td>
                            <td class="text-right">22200000.00</td>
                            <td class="text-right">1850000.00</td>
                            <!-- <td>86.40</td>
                            <td>65.61</td>
                            <td>167.48</td>
                            <td>0.05</td> -->
                            <td class="text-right">319.48</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td> MINISTRY OF MINERAL DEVELOPMENT </td>
                            <td class="text-right">2000000.00</td>
                            <td class="text-right">166666.67</td>
                            <!-- <td>189.03</td>
                            <td>57.35</td>
                            <td>61.70</td>
                            <td>0.01</td> -->
                            <td class="text-right">308.07</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td> PLATEAU STATE FIRE SERVICE DIRECTORATE </td>
                            <td class="text-right">302351500.00</td>
                            <td class="text-right">25195958.33</td>
                            <!-- <td>71.13</td>
                            <td>83.78</td>
                            <td>144.87</td>
                            <td>0.96</td> -->
                            <td class="text-right">299.78</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td> PLATEAU STATE UNIVERSITY BOKKOS </td>
                            <td class="text-right">118020000.00</td>
                            <td class="text-right">9835000.00</td>
                            <!-- <td>88.19</td>
                            <td>33.10</td>
                            <td>164.10</td>
                            <td>0.42</td> -->
                            <td class="text-right">285.38</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td> COLLEGE OF ARTS SCIENCE AND TECHNOLOGY, KURGWI </td>
                            <td class="text-right">422093600.00</td>
                            <td class="text-right">35174466.67</td>
                            <!-- <td>223.42</td>
                            <td>0.00</td>
                            <td>36.26</td>
                            <td>4.41</td> -->
                            <td class="text-right">259.67</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td> PLATEAU STATE CIVIL SERVICE COMMISSION </td>
                            <td class="text-right">2750000.00</td>
                            <td class="text-right">229166.67</td>
                            <!-- <td>55.20</td>
                            <td>101.60</td>
                            <td>94.40</td>
                            <td>0.01</td> -->
                            <td class="text-right">251.20</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td> PLATEAU STATE UNIVERSAL BASIC EDUCATION </td>
                            <td class="text-right">1500000.00</td>
                            <td class="text-right">125000.00</td>
                            <!-- <td>23.89</td>
                            <td>53.80</td>
                            <td>153.69</td>
                            <td>0.00</td> -->
                            <td class="text-right">231.38</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td> JOS METROPOLITAN DEVELOPMENT BOARD </td>
                            <td class="text-right">2100000.00</td>
                            <td class="text-right">175000.00</td>
                            <!-- <td>130.45</td>
                            <td>38.88</td>
                            <td>61.39</td>
                            <td>0.00</td> -->
                            <td class="text-right">230.73</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td> MINISTRY OF WOMEN AFFAIRS AND SOCIAL </td>
                            <td class="text-right">400000.00</td>
                            <td class="text-right">33333.33</td>
                            <!-- <td>45.71</td>
                            <td>160.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">205.71</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td> MINISTRY OF YOUTH AND SPORTS DEVELOPMENT - </td>
                            <td class="text-right">243625000.00</td>
                            <td class="text-right">20302083.33</td>
                            <!-- <td>7.33</td>
                            <td>131.95</td>
                            <td>65.84</td>
                            <td>0.38</td> -->
                            <td class="text-right">205.11</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td> MINISTRY OF TOURISM CULTURE AND HOSPT. </td>
                            <td class="text-right">1050000.00</td>
                            <td class="text-right">87500.00</td>
                            <!-- <td>124.76</td>
                            <td>13.04</td>
                            <td>49.79</td>
                            <td>0.00</td> -->
                            <td class="text-right">187.59</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td> MINISTRY OF PHYSICAL PLANNING AND URBAN DEVELOPMENT </td>
                            <td class="text-right">105190131.00</td>
                            <td class="text-right">8765844.25</td>
                            <!-- <td>177.14</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.10</td> -->
                            <td class="text-right">177.14</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td> PLATEAU STATE AUDIT DEPARTMENT </td>
                            <td class="text-right">420550000.00</td>
                            <td class="text-right">35045833.33</td>
                            <!-- <td>33.47</td>
                            <td>54.98</td>
                            <td>64.54</td>
                            <td>0.39</td> -->
                            <td class="text-right">152.99</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td> MINISTRY OF WATER RESOURCES AND ENERGY - </td>
                            <td class="text-right">250000.00</td>
                            <td class="text-right">20833.33</td>
                            <!-- <td>0.42</td>
                            <td>148.12</td>
                            <td>0.14</td>
                            <td>0.00</td> -->
                            <td class="text-right">148.69</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td> PLATEAU STATE TEACHERS SERVICE COMMISSION </td>
                            <td class="text-right">2510000.00</td>
                            <td class="text-right">209166.67</td>
                            <!-- <td>12.00</td>
                            <td>74.36</td>
                            <td>61.93</td>
                            <td>0.00</td> -->
                            <td class="text-right">148.29</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td> PLATEAU STATE LIBRARY BOARD </td>
                            <td class="text-right">550000.00</td>
                            <td class="text-right">45833.33</td>
                            <!-- <td>33.60</td>
                            <td>62.40</td>
                            <td>48.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">144.00</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td> PLATEAU STATE WATER BOARD </td>
                            <td class="text-right">4175000.00</td>
                            <td class="text-right">347916.67</td>
                            <!-- <td>50.19</td>
                            <td>49.94</td>
                            <td>39.29</td>
                            <td>0.00</td> -->
                            <td class="text-right">139.42</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td> COLLEGE OF AGRICULTURE GARKAWA - PLATEAU</td>
                            <td class="text-right">45000000.00</td>
                            <td class="text-right">3750000.00</td>
                            <!-- <td>26.97</td>
                            <td>86.07</td>
                            <td>22.15</td>
                            <td>0.07</td> -->
                            <td class="text-right">135.19</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td> SHARIA COURT OF APPEAL - PLATEAU STATE </td>
                            <td class="text-right">60000000.00</td>
                            <td class="text-right">5000000.00</td>
                            <!-- <td>29.67</td>
                            <td>49.31</td>
                            <td>51.05</td>
                            <td>0.03</td> -->
                            <td class="text-right">130.04</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td> MINITRY OF BUDGET AND ECONOMIC PLANNING </td>
                            <td class="text-right">55000000.00</td>
                            <td class="text-right">4583333.33</td>
                            <!-- <td>54.00</td>
                            <td>0.00</td>
                            <td>64.80</td>
                            <td>0.14</td> -->
                            <td class="text-right">118.80</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td> COLLEGE OF EDUCATION GINDIRI - PLATEAU</td>
                            <td class="text-right">1063000000.00</td>
                            <td class="text-right">88583333.33</td>
                            <!-- <td>13.69</td>
                            <td>88.80</td>
                            <td>10.34</td>
                            <td>0.90</td> -->
                            <td class="text-right">112.83</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td> PLATEAU STATE ROAD MAINTENANCE AGENCY </td>
                            <td class="text-right">9700000.00</td>
                            <td class="text-right">808333.33</td>
                            <!-- <td>54.29</td>
                            <td>45.71</td>
                            <td>5.71</td>
                            <td>0.00</td> -->
                            <td class="text-right">105.71</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td> MINISTRY OF EDU. SCI & TECH - (HIGHER EDUCATION) </td>
                            <td class="text-right">500000.00</td>
                            <td class="text-right">41666.67</td>
                            <!-- <td>0.00</td>
                            <td>40.00</td>
                            <td>58.02</td>
                            <td>0.00</td> -->
                            <td class="text-right">98.02</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td> CUSTOMARY COURT OF APPEAL </td>
                            <td class="text-right">256550000.00</td>
                            <td class="text-right">21379166.67</td>
                            <!-- <td>16.37</td>
                            <td>31.34</td>
                            <td>45.32</td>
                            <td>0.16</td> -->
                            <td class="text-right">93.03</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td> PLATEAU STATE PUBLISHING CORPORATION </td>
                            <td class="text-right">8910000.00</td>
                            <td class="text-right">742500.00</td>
                            <!-- <td>43.03</td>
                            <td>28.27</td>
                            <td>17.15</td>
                            <td>0.01</td> -->
                            <td class="text-right">88.45</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td> MINISTRY OF EDUCATION AND ERC PLATEAU STATE </td>
                            <td class="text-right">360000.00</td>
                            <td class="text-right">30000.00</td>
                            <!-- <td>40.69</td>
                            <td>7.33</td>
                            <td>34.79</td>
                            <td>0.00</td> -->
                            <td class="text-right">82.81</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td> MINISTRY OF LANDS SURVEY AND TOWN</td>
                            <td class="text-right">1250000.00</td>
                            <td class="text-right">104166.67</td>
                            <!-- <td>23.58</td>
                            <td>26.17</td>
                            <td>26.20</td>
                            <td>0.00</td> -->
                            <td class="text-right">75.95</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td> JUDICIAL SERVICE COMMISSION </td>
                            <td class="text-right">259100000.00</td>
                            <td class="text-right">21591666.67</td>
                            <!-- <td>16.67</td>
                            <td>25.00</td>
                            <td>28.00</td>
                            <td>0.33</td> -->
                            <td class="text-right">69.67</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td> MINISTRY OF HEALTH - PLATEAU STATE </td>
                            <td class="text-right">2800000.00</td>
                            <td class="text-right">233333.33</td>
                            <!-- <td>17.10</td>
                            <td>14.95</td>
                            <td>25.75</td>
                            <td>0.00</td> -->
                            <td class="text-right">57.80</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td> MINISTRY OF TRANSPORT - PLATEAU STATE </td>
                            <td class="text-right">20740000.00</td>
                            <td class="text-right">1728333.33</td>
                            <!-- <td>17.65</td>
                            <td>19.66</td>
                            <td>17.08</td>
                            <td>0.01</td> -->
                            <td class="text-right">54.39</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td> MINISTRY OF FINANCE - BUREAU FOR BUDGET PLATEAU STATE </td>
                            <td class="text-right">2210000.00</td>
                            <td class="text-right">184166.67</td>
                            <!-- <td>24.02</td>
                            <td>11.72</td>
                            <td>5.70</td>
                            <td>0.01</td> -->
                            <td class="text-right">41.44</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td> MINISTRY OF HOUSING - PLATEAU STATE </td>
                            <td class="text-right">4350000.00</td>
                            <td class="text-right">362500.00</td>
                            <!-- <td>27.39</td>
                            <td>8.62</td>
                            <td>3.45</td>
                            <td>0.00</td> -->
                            <td class="text-right">39.46</td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td> PLATEAU STATE SPORTS COUNCIL </td>
                            <td class="text-right">35050000.00</td>
                            <td class="text-right">2920833.33</td>
                            <!-- <td>5.52</td>
                            <td>4.14</td>
                            <td>17.93</td>
                            <td>0.01</td> -->
                            <td class="text-right">27.59</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td> PLATEAU STATE ENVIRONMENTAL PROTECTION </td>
                            <td class="text-right">23100000.00</td>
                            <td class="text-right">1925000.00</td>
                            <!-- <td>21.77</td>
                            <td>3.71</td>
                            <td>1.24</td>
                            <td>0.00</td> -->
                            <td class="text-right">26.72</td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td> PLATEAU STATE BUREAU OF PUBLIC PROCUREMENT </td>
                            <td class="text-right">310650000.00</td>
                            <td class="text-right">25887500.00</td>
                            <!-- <td>0.00</td>
                            <td>5.77</td>
                            <td>18.46</td>
                            <td>0.02</td> -->
                            <td class="text-right">24.23</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td> KABONG MARKET </td>
                            <td class="text-right">51050000.00</td>
                            <td class="text-right">4254166.67</td>
                            <!-- <td>5.26</td>
                            <td>0.00</td>
                            <td>18.15</td>
                            <td>0.08</td> -->
                            <td class="text-right">23.40</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td> OFFICE OF THE SECRETARY TO THE GOVERNMENT </td>
                            <td class="text-right">3000000.00</td>
                            <td class="text-right">250000.00</td>
                            <!-- <td>11.00</td>
                            <td>1.39</td>
                            <td>10.59</td>
                            <td>0.00</td> -->
                            <td class="text-right">22.98</td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td> PLATEAU STATE RELEVANT TECH BOARD </td>
                            <td class="text-right">75085500.00</td>
                            <td class="text-right">6257125.00</td>
                            <!-- <td>0.00</td>
                            <td>22.14</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">22.14</td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td> MINISTRY OF ENVIRONMENT </td>
                            <td class="text-right">2565000.00</td>
                            <td class="text-right">213750.00</td>
                            <!-- <td>5.19</td>
                            <td>4.78</td>
                            <td>0.34</td>
                            <td>0.03</td> -->
                            <td class="text-right">10.31</td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td> PLATEAU STATE HOSPITALS MANAGEMENT BOARD </td>
                            <td class="text-right">15000000.00</td>
                            <td class="text-right">1250000.00</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>6.66</td>
                            <td>0.02</td> -->
                            <td class="text-right">6.66</td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td> MINISTRY FOR LOCAL GOVERNMENT AND CHIFTANCY </td>
                            <td class="text-right">5200000.00</td>
                            <td class="text-right">433333.33</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>6.16</td>
                            <td>0.00</td> -->
                            <td class="text-right">6.16</td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td> MINISTRY OF AGRICULTURE AND RURAL </td>
                            <td class="text-right">197000000.00</td>
                            <td class="text-right">16416666.67</td>
                            <!-- <td>1.75</td>
                            <td>0.95</td>
                            <td>2.28</td>
                            <td>0.01</td> -->
                            <td class="text-right">4.98</td>
                        </tr>
                        <tr>
                            <td>54</td>
                            <td> PLATEAU STATE TOURISM CORPORATION </td>
                            <td class="text-right">22650000.00</td>
                            <td class="text-right">1887500.00</td>
                            <!-- <td>0.00</td>
                            <td>1.66</td>
                            <td>1.21</td>
                            <td>0.00</td> -->
                            <td class="text-right">2.87</td>
                        </tr>
                        <tr>
                            <td>55</td>
                            <td> OFFICE OF THE HEAD OF CIVIL SERVICE - PLATEAU </td>
                            <td class="text-right">39700000.00</td>
                            <td class="text-right">3308333.33</td>
                            <!-- <td>0.11</td>
                            <td>0.10</td>
                            <td>0.18</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.38</td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td> PLATEAU STATE SCHOLARSHIP BOARD </td>
                            <td class="text-right">1355000.00</td>
                            <td class="text-right">112916.67</td>
                            <!-- <td>0.20</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.20</td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td> PLATEAU RADIO TELEVISION CORPORATION-RADIO </td>
                            <td class="text-right">110000000.00</td>
                            <td class="text-right">9166666.67</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td> COLLEGE OF HEALTH TECHNOLOGY ZAWAN </td>
                            <td class="text-right">80000000.00</td>
                            <td class="text-right">6666666.67</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td> PLATEAU UNITED FOOTBALL CLUB </td>
                            <td class="text-right">55000000.00</td>
                            <td class="text-right">4583333.33</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td> MINISTRY OF WORKS - PLATEAU STATE </td>
                            <td class="text-right">42500000.00</td>
                            <td class="text-right">3541666.67</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td> PLATEAU STATE RURAL WATER SUP & SAN AGENCY </td>
                            <td class="text-right">31300000.00</td>
                            <td class="text-right">2608333.33</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>62</td>
                            <td> PLATEAU STATE INDEPENDENT ELECTORAL </td>
                            <td class="text-right">30050000.00</td>
                            <td class="text-right">2504166.67</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td> PLATEAU STATE MICROFINANCE DEV AGENCY </td>
                            <td class="text-right">21000000.00</td>
                            <td class="text-right">1750000.00</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td> PLATAEU AGRICULTURAL MECHANIZATION </td>
                            <td class="text-right">20050000.00</td>
                            <td class="text-right">1670833.33</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>65</td>
                            <td> PLATEAU AGRICULTURAL DEVELOPMENT PROGRAMME </td>
                            <td class="text-right">6263000.00</td>
                            <td class="text-right">521916.67</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td> PLATEAU STATE CHRISTIAN PILGRIMS WELFARE </td>
                            <td class="text-right">4000000.00</td>
                            <td class="text-right">333333.33</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>67</td>
                            <td> PLATEAU STATE MUSLIM PILGRIMS WELFARE </td>
                            <td class="text-right">3550000.00</td>
                            <td class="text-right">295833.33</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>68</td>
                            <td> PLATEAU STATE LOCAL GOVERNMENT STAFF PENSION BOARD </td>
                            <td class="text-right">2000000.00</td>
                            <td class="text-right">166666.67</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>69</td>
                            <td> PLATEAU STATE HOUSE OF ASSEMBLY COMMISSION </td>
                            <td class="text-right">500000.00</td>
                            <td class="text-right">41666.67</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>70</td>
                            <td> PLATEAU STATE DISABILITY RIGHTS COMMISSION </td>
                            <td class="text-right">405000.00</td>
                            <td class="text-right">33750.00</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>71</td>
                            <td> PLATEAU STATE AIDS CONTROL AGENCY </td>
                            <td class="text-right">325000.00</td>
                            <td class="text-right">27083.33</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>72</td>
                            <td> PRIMARY HEALTH CARE DEVELOPMENT </td>
                            <td class="text-right">300000.00</td>
                            <td class="text-right">25000.00</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td>73</td>
                            <td> PLATEAU STATE ADULT AND NON FORMAL. </td>
                            <td class="text-right">270000.00</td>
                            <td class="text-right">22500.00</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr class="bg-soft-danger">
                            <td>74</td>
                            <td> PLATEAU STATE AFORESTATION PROGRAMME </td>
                            <td class="text-right">200000.00</td>
                            <td class="text-right">16666.67</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr class="bg-danger text-white">
                            <td>75</td>
                            <td> OFFICE OF THE ACCOUNTANT GENERAL - PLATEAU </td>
                            <td class="text-right">50000.00</td>
                            <td class="text-right">4166.67</td>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr class="text-white" style="background-color: #a72626;">
                            <td>76</td>
                            <td> PLATEAU STATE BUREAU OF STATISTICS </td>
                            <td class="text-right">10000.00</td>
                            <tdclass="text-right">833.33</tdclass=>
                            <!-- <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.00</td> -->
                            <td class="text-right">0.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->

</div>
<?php
include_once PAGE_PARTIALS_PATH . DS . 'footer.php';
?>