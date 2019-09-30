<?php
if ( !defined( 'ABSPATH' ) ) exit;


?>

<div class="cpm-plugin-wrap">
    <div class="header-wrap">
        <div class="row">
            <div class="logo-wrap col-md-4">
                <img src="<?php echo plugin_dir_url( __FILE__ ).'assets/images/logo.png'; ?>" alt="logo" class="logo">
                <div class="title">
                    <h1><?php _e( 'CPM Plugin Settings', 'Cpm_Plugin' ); ?></h1>
                    <p>
                        <a href="codepixelzmedia.com"><img src="<?php echo plugin_dir_url( __FILE__ ).'assets/images/cpm-logo.png'; ?>" alt="cpm-logo" class="cpm-logo"></a>
                    </p>
                </div>
            </div>

            <div class="addbanner-wrap col-md-4">
                <img src="<?php echo plugin_dir_url( __FILE__ ).'assets/images/addbanner.jpg'; ?>" alt="addbanner" class="addbanner">
            </div>

            <div class="btn-wrap col-md-4">
                <a href="#" class="cpm-btn dashicons-before dashicons-heart">support</a>
                <a href="#" class="cpm-btn btn2 dashicons-before dashicons-star-filled">Rate us</a>
            </div>
        </div>
    </div>

    <div class="body-wrap">
        <div id="tabs-wrap" class="tabs-wrap">

            <ul class="tab-menu">
                <li class="nav-tab"><a href="#general" class="dashicons-before dashicons-editor-alignleft"><?php _e( 'General', 'Cpm_Plugin' ); ?></a></li>
                <li class="nav-tab"><a href="#options" class="dashicons-before dashicons-admin-generic"><?php _e( 'Options', 'Cpm_Plugin' ); ?></a></li>
                <li class="nav-tab"><a href="#advanced" class="dashicons-before dashicons-admin-settings"><?php _e( 'Advanced', 'Cpm_Plugin' ); ?></a></li>
                <li class="nav-tab"><a href="#extra" class="dashicons-before dashicons-admin-tools"><?php _e( 'Extras', 'Cpm_Plugin' ); ?></a></li>
            </ul>

            <div class="tab-content">
                <div id="general">
                    <h2 class="tab-title">General Title</h2>
                    <p>This is a ramdom settings form.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis rem facere doloribus delectus, reiciendis ipsum itaque placeat, eveniet perferendis vel molestiae impedit magnam. Sapiente, distinctio. Laboriosam accusamus odio architecto minus.</p>

                    <form action="">
                        <div class="form-group">
                            <label for="">Name</label>
                            <div class="form-control-wrap">
                                <input class="form-control" type="text" placeholder="Name" onfocus="this.placeholder=''" onblur="this.placeholder='Name'">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <div class="form-control-wrap">
                                <input class="form-control" type="text" placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder='Email'">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Subject</label>
                            <div class="form-control-wrap">
                                <input class="form-control" type="text" placeholder="Subject" onfocus="this.placeholder=''" onblur="this.placeholder='Subject'">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Message</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control" placeholder="Message" onfocus="this.placeholder=''" onblur="this.placeholder='Message'"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Select Country</label>
                            <div class="form-control-wrap">
                                <select name="" id="" class="form-control">
                                    <option value="Nepal">Nepal</option>
                                    <option value="England">England</option>
                                    <option value="Australia">Australia</option>
                                    <option value="New Zealand">New Zealand</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Enable form</label>
                            <div class="form-control-wrap">
                                <div class="checkbox-wrap custom">
                                    <input type="checkbox">
                                    <span class="custom-checkbox"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Form position</label>
                            <div class="form-control-wrap">
                                <div class="radio-wrap custom">
                                    <input type="radio" value="left" name="">
                                    <span class="custom-radio">Left</span>
                                </div>
                                <div class="radio-wrap custom">
                                    <input type="radio" value="right" name="" checked="checked">
                                    <span class="custom-radio">Right</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="cpm-btn submit">
                        </div>
                    </form>

                    <div class="success-box">
                        This is a success message
                    </div>

                    <div class="error-box">
                        This is an error message
                    </div>

                    <div class="info-box">
                        This is an info message
                    </div>

                    <div class="warning-box">
                        This is a warning message
                    </div>

                    <hr>

                    <h3>This is just a random table</h3>
                    <div class="cpm-table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>Released Date</th>
                                    <th>Plugin Name</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Tags</th>
                                    <th>Version</th>
                                    <th>Total Downloads</th>
                                    <th>Ratings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2017-05-09</td>
                                    <td>Re-Order Post</td>
                                    <td>Smith Plugin</td>
                                    <td>For ordering post in post date, alaphabetical wise and also can drag and re-oder</td>
                                    <td>#post #orderpost</td>
                                    <td>1.0.1</td>
                                    <td>200</td>
                                    <td>3/5</td>
                                </tr>
                                <tr>
                                    <td>2017-05-11</td>
                                    <td>Masonary Gallery</td>
                                    <td>John Plugin</td>
                                    <td>For installing beautiful masonary gallery.</td>
                                    <td>#masonary #gallery</td>
                                    <td>1.0.2</td>
                                    <td>250</td>
                                    <td>3.5/5</td>
                                </tr>

                                <tr>
                                    <td>2017-01-24</td>
                                    <td>Table Slider</td>
                                    <td>Shishta Pradhan</td>
                                    <td>To add beautiful slider options for table in mobile devices.</td>
                                    <td>#slider #tableslider</td>
                                    <td>1.0.5</td>
                                    <td>100</td>
                                    <td>3.5/5</td>
                                </tr>

                                <tr>
                                    <td>2017-05-25</td>
                                    <td>Fast Site</td>
                                    <td>Mac Plugin</td>
                                    <td>For making the site faster and efficient.</td>
                                    <td>#fast #efficient</td>
                                    <td>1.0.2</td>
                                    <td>200</td>
                                    <td>3.5/5</td>
                                </tr>

                                <tr>
                                    <td>2017-05-15</td>
                                    <td>Plugin Five</td>
                                    <td>Andrew Plugin</td>
                                    <td>For adding the coming soon page on under-construction pages.</td>
                                    <td>#comingsoon #underconstruction</td>
                                    <td>1.0.2</td>
                                    <td>200</td>
                                    <td>3.5/5</td>
                                </tr>

                                <tr>
                                    <td>2017-05-19</td>
                                    <td>Store Locator</td>
                                    <td>Alok Shrestha</td>
                                    <td>For store locatior purpose</td>
                                    <td>#store #locator</td>
                                    <td>1.0.2</td>
                                    <td>500</td>
                                    <td>3.5/5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div id="options">
                    <h2 class="tab-title">Options Title</h2>
                    <p>This is for tab for options. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptates odit distinctio perferendis porro aliquam beatae iure laudantium veniam voluptas vero similique ratione mollitia, rerum inventore saepe impedit eveniet necessitatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptates odit distinctio perferendis porro aliquam beatae iure laudantium veniam voluptas vero similique ratione mollitia, rerum inventore saepe impedit eveniet necessitatibus!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptates odit distinctio perferendis porro aliquam beatae iure laudantium veniam voluptas vero similique ratione mollitia, rerum inventore saepe impedit eveniet necessitatibus!</p>
                    <hr>
                    <h3>This is just a random table</h3>
                    <div class="cpm-table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>Released Date</th>
                                    <th>Plugin Name</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Tags</th>
                                    <th>Version</th>
                                    <th>Total Downloads</th>
                                    <th>Ratings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2017-05-09</td>
                                    <td>Re-Order Post</td>
                                    <td>Smith Plugin</td>
                                    <td>For ordering post in post date, alaphabetical wise and also can drag and re-oder</td>
                                    <td>#post #orderpost</td>
                                    <td>1.0.1</td>
                                    <td>200</td>
                                    <td>3/5</td>
                                </tr>
                                <tr>
                                    <td>2017-05-11</td>
                                    <td>Masonary Gallery</td>
                                    <td>John Plugin</td>
                                    <td>For installing beautiful masonary gallery.</td>
                                    <td>#masonary #gallery</td>
                                    <td>1.0.2</td>
                                    <td>250</td>
                                    <td>3.5/5</td>
                                </tr>

                                <tr>
                                    <td>2017-01-24/td>
                                    <td>Table Slider</td>
                                    <td>Shishta Pradhan</td>
                                    <td>To add beautiful slider options for table in mobile devices.</td>
                                    <td>#slider #tableslider</td>
                                    <td>1.0.5</td>
                                    <td>100</td>
                                    <td>3.5/5</td>
                                </tr>

                                <tr>
                                    <td>2017-05-25</td>
                                    <td>Fast Site</td>
                                    <td>Mac Plugin</td>
                                    <td>For making the site faster and efficient.</td>
                                    <td>#fast #efficient</td>
                                    <td>1.0.2</td>
                                    <td>200</td>
                                    <td>3.5/5</td>
                                </tr>

                                <tr>
                                    <td>2017-05-15</td>
                                    <td>Plugin Five</td>
                                    <td>Andrew Plugin</td>
                                    <td>For adding the coming soon page on under-construction pages.</td>
                                    <td>#comingsoon #underconstruction</td>
                                    <td>1.0.2</td>
                                    <td>200</td>
                                    <td>3.5/5</td>
                                </tr>

                                <tr>
                                    <td>2017-05-19</td>
                                    <td>Store Locator</td>
                                    <td>Alok Shrestha</td>
                                    <td>For store locatior purpose</td>
                                    <td>#store #locator</td>
                                    <td>1.0.2</td>
                                    <td>500</td>
                                    <td>3.5/5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="advanced">
                    <h2 class="tab-title">Advanced Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, rem dolores earum temporibus nihil consequatur vero perspiciatis accusantium architecto, impedit, aliquam natus. Sequi ad harum tempore, fugit iusto illo nihil.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, rem dolores earum temporibus nihil consequatur vero perspiciatis accusantium architecto, impedit, aliquam natus. Sequi ad harum tempore, fugit iusto illo nihil</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, rem dolores earum temporibus nihil consequatur vero perspiciatis accusantium architecto, impedit, aliquam natus. Sequi ad harum tempore, fugit iusto illo nihil.Lorem ipsum dolor sit amet.</p>
                </div>

                <div id="extra">
                    <h2 class="tab-title">Extras Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, rem dolores earum temporibus nihil consequatur vero perspiciatis accusantium architecto, impedit, aliquam natus. Sequi ad harum tempore, fugit iusto illo nihil.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, rem dolores earum temporibus nihil consequatur vero perspiciatis accusantium architecto, impedit, aliquam natus. Sequi ad harum tempore, fugit iusto illo nihil</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, rem dolores earum temporibus nihil consequatur vero perspiciatis accusantium architecto, impedit, aliquam natus. Sequi ad harum tempore, fugit iusto illo nihil.Lorem ipsum dolor sit amet.</p>

                    <h1>This is heading tag 1</h1>
                    <h2>This is heading tag 1</h2>
                    <h3>This is heading tag 1</h3>
                    <h4>This is heading tag 1</h4>
                    <h5>This is heading tag 1</h5>
                    <h6>This is heading tag 1</h6>
                    <hr>
                    <ol>
                        <li><a href="">this is just a numbered list</a></li>
                        <li><a href="">this is just a numbered list</a></li>
                        <li><a href="">this is just a numbered list</a></li>
                        <li><a href="">this is just a numbered list</a></li>
                        <li><a href="">this is just a numbered list</a></li>
                    </ol>
                    <ul>
                        <li><a href="">this is just a normal list</a></li>
                        <li><a href="">this is just a normal list</a></li>
                        <li><a href="">this is just a normal list</a></li>
                        <li><a href="">this is just a normal list</a></li>
                        <li><a href="">this is just a normal list</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="accordion" class="accordion-wrap">
            <h3>Section 1</h3>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi officia consectetur consequatur omnis adipisci harum, perspiciatis ducimus quibusdam distinctio maxime sint dignissimos doloremque dolorum exercitationem eum, id assumenda qui consequuntur.
            </div>

            <h3>Section 2</h3>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi officia consectetur consequatur omnis adipisci harum, perspiciatis ducimus quibusdam distinctio maxime sint dignissimos doloremque dolorum exercitationem eum, id assumenda qui consequuntur.
            </div>

        </div>

        <div class="chart-sec">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card-block bar-chart-block">
                        <div class="title-wrap">
                            <h3 class="title"><a href="">Bar Chart Example</a></h3>
                        </div>
                        <div class="content">
                            <canvas id="bar-chart" width="800" height="450"></canvas>
                            <script>
                                // Bar chart
                                new Chart(document.getElementById("bar-chart"), {
                                    type:"bar",
                                    data: {
                                        labels: ["January","February","March","April","May","June","July"],
                                        datasets: [
                                            {
                                                label : "Chart.js Bar Chart",
                                                data: [65,59,80,81,56,55,40],
                                                fill: false,
                                                backgroundColor: ["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],
                                                borderColor: ["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],
                                                borderWidth:1
                                            }
                                        ]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [
                                                {
                                                    ticks:{
                                                        beginAtZero:true
                                                    }
                                                }
                                            ]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-block horibar-chart-block">
                        <div class="title-wrap">
                            <h3 class="title"><a href="">Horizontal Bar Chart Example</a></h3>
                        </div>
                        <div class="content">
                            <canvas id="hori-bar-chart" width="800" height="450"></canvas>
                            <script>
                                // Bar chart
                                new Chart(document.getElementById("hori-bar-chart"), {
                                    type: 'horizontalBar',
                                    data: {
                                        labels: ["January","February","March","April","May","June","July"],
                                        datasets: [
                                            {
                                                label : "Chart.js Bar Chart",
                                                data: [65,59,80,81,56,55,40],
                                                fill: false,
                                                backgroundColor: ["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],
                                                borderColor: ["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],
                                                borderWidth:1
                                            }
                                        ]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [
                                                {
                                                    ticks:{
                                                        beginAtZero:true
                                                    }
                                                }
                                            ]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-block line-chart-block">
                        <div class="title-wrap">
                            <h3 class="title"><a href="">Line Chart Example</a></h3>
                        </div>
                        <div class="content">
                            <canvas id="line-chart" width="800" height="450"></canvas>
                            <script>new Chart(document.getElementById("line-chart"),{"type":"line","data":{"labels":["January","February","March","April","May","June","July"],"datasets":[{"label":"Line Chart Example","data":[65,59,80,81,56,55,40],"fill":false,"borderColor":"rgb(75, 192, 192)","lineTension":0.1}]},"options":{scales: {
                                            yAxes: [
                                                {
                                                    ticks:{
                                                        reverse: true,
                                                        beginAtZero:true
                                                    }
                                                }
                                            ]
                                        }}});</script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-block multiline-chart-block">
                        <div class="title-wrap">
                            <h3 class="title"><a href="">Multiple Line Chart Example</a></h3>
                        </div>
                        <div class="content">
                                <canvas id="multi-line-chart" width="800" height="450"></canvas>
                            <script>
                                new Chart(document.getElementById("multi-line-chart"), {
                                  type: 'line',
                                  data: {
                                    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                                    datasets: [{
                                        data: [86,114,106,106,107,111,133,221,783,2478],
                                        label: "Africa",
                                        borderColor: "#3e95cd",
                                        fill: false
                                      }, {
                                        data: [282,350,411,502,635,809,947,1402,3700,5267],
                                        label: "Asia",
                                        borderColor: "#8e5ea2",
                                        fill: false
                                      }, {
                                        data: [168,170,178,190,203,276,408,547,675,734],
                                        label: "Europe",
                                        borderColor: "#3cba9f",
                                        fill: false
                                      }, {
                                        data: [40,20,10,16,24,38,74,167,508,784],
                                        label: "Latin America",
                                        borderColor: "#e8c3b9",
                                        fill: false
                                      }, {
                                        data: [6,3,2,2,7,26,82,172,312,433],
                                        label: "North America",
                                        borderColor: "#c45850",
                                        fill: false
                                      }
                                    ]
                                  },
                                  options: {
                                    title: {
                                      display: true,
                                      text: 'World population per region (in millions)'
                                    }
                                  }
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-block pie-chart-block">
                        <div class="title-wrap">
                            <h3 class="title"><a href="">Pie Chart Example</a></h3>
                        </div>
                        <div class="content">
                            <canvas id="pie-chart" width="800" height="450"></canvas>
                            <script>new Chart(document.getElementById("pie-chart"), {
                                type: 'pie',
                                data: {
                                  labels: ["WordPress", "Drupal", "Joomla", "Magneto", "Others"],
                                  datasets: [{
                                    label: "Population (millions)",
                                    backgroundColor: ["#4E7DB4", "#9DBA5F","#BD5552","#846AA3","#51ACC4"],
                                    data: [61,5,8,3,23]
                                  }]
                                },
                                options: {
                                  title: {
                                    display: true,
                                    text: 'CMS Pie chart'
                                  }
                                }
                            });</script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-block doughnut-chart-block">
                        <div class="title-wrap">
                            <h3 class="title"><a href="">Doughnut Chart Example</a></h3>
                        </div>
                        <div class="content">
                            <canvas id="doughnut-chart" width="800" height="450"></canvas>
                            <script>new Chart(document.getElementById("doughnut-chart"),{"type":"doughnut","data":{"labels":["Red","Blue","Yellow"],"datasets":[{"label":"My First Dataset","data":[300,50,100],"backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]}]}});</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="related-plugins-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="sec-title"><span>Related Plugins Design 1</span></h2>
                </div>
                <div class="col-sm-4">
                    <div class="card-block">
                        <figure>
                            <a href=""><img src="<?php echo plugin_dir_url( __FILE__ ).'assets/images/img1.jpg'; ?>" alt=""></a>
                        </figure>
                        <div class="content">
                            <h3><a href="">CPM Slider Plugin</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae delectus ipsa, ducimus, tempora corporis tenetur a illo perspiciatis.</p>
                            <a href="" class="cpm-btn">View Plugin</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card-block">
                        <figure>
                            <a href=""><img src="<?php echo plugin_dir_url( __FILE__ ).'assets/images/img1.jpg'; ?>" alt=""></a>
                        </figure>
                        <div class="content">
                            <h3><a href="">CPM Slider Plugin</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae delectus ipsa, ducimus, tempora corporis tenetur a illo perspiciatis.</p>
                            <a href="" class="cpm-btn">View Plugin</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card-block">
                        <figure>
                            <a href=""><img src="<?php echo plugin_dir_url( __FILE__ ).'assets/images/img1.jpg'; ?>" alt=""></a>
                        </figure>
                        <div class="content">
                            <h3><a href="">CPM Slider Plugin</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae delectus ipsa, ducimus, tempora corporis tenetur a illo perspiciatis.</p>
                            <a href="" class="cpm-btn">View Plugin</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h2 class="sec-title"><span>Related Plugins Design 2</span></h2>
                </div>
                <div class="col-sm-4">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-4 pad-0 bg-img" style="background-image: url(<?php echo plugin_dir_url( __FILE__ ).'assets/images/img4.jpg'; ?>);">
                            </div>
                            <div class="col-sm-8 pad-lt-0 pull-right">
                                <div class="content">
                                    <h3 class="title"><a href="">CPM Slider Plugin</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae delectus ipsa, ducimus, tempora corporis tenetur a illo perspiciatis.</p>
                                    <a href="" class="cpm-btn">View Plugin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-4 pad-0 bg-img" style="background-image: url(<?php echo plugin_dir_url( __FILE__ ).'assets/images/img4.jpg'; ?>);">
                            </div>
                            <div class="col-sm-8 pad-lt-0 pull-right">
                                <div class="content">
                                    <h3 class="title"><a href="">CPM Slider Plugin</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae delectus ipsa, ducimus, tempora corporis tenetur a illo perspiciatis.</p>
                                    <a href="" class="cpm-btn">View Plugin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-4 pad-0 bg-img" style="background-image: url(<?php echo plugin_dir_url( __FILE__ ).'assets/images/img4.jpg'; ?>);">
                            </div>
                            <div class="col-sm-8 pad-lt-0 pull-right">
                                <div class="content">
                                    <h3 class="title"><a href="">CPM Slider Plugin</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae delectus ipsa, ducimus, tempora corporis tenetur a illo perspiciatis.</p>
                                    <a href="" class="cpm-btn">View Plugin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h2 class="sec-title"><span>Card Design Examples</span></h2>
                </div>
                <div class="col-sm-12">
                    <div class="card-block">
                        <div class="title-wrap">
                            <h3 class="title"><a href="">CPM Slider Plugin</a></h3>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae delectus ipsa, ducimus, tempora corporis tenetur a illo perspiciatis.</p>
                            <a href="" class="cpm-btn">View Plugin</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card-block">
                        <div class="title-wrap">
                            <h3 class="title"><a href="">CPM Slider Plugin</a></h3>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae delectus ipsa, ducimus, tempora corporis tenetur a illo perspiciatis.</p>
                            <a href="" class="cpm-btn">View Plugin</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card-block">
                        <div class="title-wrap">
                            <h3 class="title"><a href="">CPM Slider Plugin</a></h3>
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae delectus ipsa, ducimus, tempora corporis tenetur a illo perspiciatis.</p>
                            <a href="" class="cpm-btn">View Plugin</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="<?php echo plugin_dir_url( __FILE__ ).'assets/images/img1.jpg'; ?>" alt="">
                            </div>
                            <div class="col-sm-4">
                                <div class="inner">
                                    <h4 class="border-bottom">Numbered List Title</h4>
                                    <ol>
                                        <li><a href="">this is just a numbered list</a></li>
                                        <li><a href="">this is just a numbered list</a></li>
                                        <li><a href="">this is just a numbered list</a></li>
                                        <li><a href="">this is just a numbered list</a></li>
                                        <li><a href="">this is just a numbered list</a></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="inner">
                                    <h4 class="border-bottom">Normal List Title</h4>
                                    <ul>
                                        <li><a href="">this is just a normal list</a></li>
                                        <li><a href="">this is just a normal list</a></li>
                                        <li><a href="">this is just a normal list</a></li>
                                        <li><a href="">this is just a normal list</a></li>
                                        <li><a href="">this is just a normal list</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-wrap">
        <div class="row">
            <div class="creator col-md-3">
                <span>Proudly Created by</span>
                <a href="codepixelzmedia.com"><img src="<?php echo plugin_dir_url( __FILE__ ).'assets/images/cpm-logo.png'; ?>" alt="cpm-logo" class="cpm-logo"></a>
            </div>

            <div class="col-md-6">
                <ul class="footer-nav">
                    <li><a href="#">Free Plugins</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Docs</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="copyright col-md-3">
                <span>All rights reserved</span>
                &copy; <?php echo date("Y"); ?>
            </div>
        </div>
    </div>

</div>
<div class="clear"></div>