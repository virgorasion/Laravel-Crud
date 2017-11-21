<div id="content-container">

				<!--Page Title-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<div id="page-title">
					<h1 class="page-header text-overflow">Dashboard</h1>

					<!--Searchbox-->
					<div class="searchbox">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</div>
				</div>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title-->


				<!--Breadcrumb-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<ol class="breadcrumb">
					<li>
						<a href="index.html#">Home</a>
					</li>
					<li>
						<a href="index.html#">Library</a>
					</li>
					<li class="active">Data</li>
				</ol>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End breadcrumb-->




				<!--Page content-->
				<!--===================================================-->
				<div id="page-content">

					<div class="row">
						<div class="col-lg-7">

							<!--Network Line Chart-->
							<!--===================================================-->
							<div id="demo-panel-network" class="panel">
								<div class="panel-heading">
									<div class="panel-control">
										<button id="demo-panel-network-refresh" data-toggle="panel-overlay" data-target="#demo-panel-network" class="btn">
											<i class="fa fa-rotate-right"></i>
										</button>
										<div class="btn-group">
											<button class="dropdown-toggle btn" data-toggle="dropdown" aria-expanded="false">
												<i class="fa fa-gear"></i>
											</button>
											<ul class="dropdown-menu dropdown-menu-right">
												<li>
													<a href="index.html#">Action</a>
												</li>
												<li>
													<a href="index.html#">Another action</a>
												</li>
												<li>
													<a href="index.html#">Something else here</a>
												</li>
												<li class="divider"></li>
												<li>
													<a href="index.html#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
									<h3 class="panel-title">Network</h3>
								</div>

								<!--Morris line chart placeholder-->
								<div id="morris-chart-network" class="morris-full-content"></div>

								<!--Chart information-->
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-9">
											<p class="text-semibold text-uppercase">CPU Temperature</p>
											<div class="row">
												<div class="col-xs-5">
													<div class="media">
														<div class="media-left">
															<span class="text-3x text-nowrap">
																<i class="pli-temperature"></i> 43.7</span>
														</div>
														<div class="media-body">
															<p class="mar-no">°C</p>
														</div>
													</div>
												</div>
												<div class="col-xs-7 text-sm">
													<p>
														<span>Min Values</span>
														<span class="pad-lft text-semibold">
															<span class="text-lg">27°</span>
															<span class="labellabel-success mar-lft">
																<i class="fa fa-caret-down text-success"></i>
																<smal>23%</smal>
															</span>
														</span>
													</p>
													<p>
														<span>Max Values</span>
														<span class="pad-lft text-semibold">
															<span class="text-lg">69°</span>
															<span class="labellabel-danger mar-lft">
																<i class="fa fa-caret-up text-danger"></i>
																<smal>57%</smal>
															</span>
														</span>
													</p>
												</div>
											</div>

											<hr>

											<div class="pad-rgt">
												<p class="text-semibold text-uppercase">
													<i class="fa fa-question-circle fa-fw text-primary"></i> Today Tips </p>
												<p class="text-muted mar-top">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
											</div>
										</div>

										<div class="col-lg-3">
											<p class="text-uppercase text-semibold">Bandwidth Usage</p>
											<ul class="list-unstyled">
												<li>
													<div class="media pad-btm">
														<div class="media-left">
															<span class="text-2x text-semibold">754.9</span>
														</div>
														<div class="media-body">
															<p class="mar-no">Mbps</p>
														</div>
													</div>
												</li>
												<li class="pad-btm">
													<div class="clearfix">
														<p class="pull-left mar-no">Income</p>
														<p class="pull-right mar-no">70%</p>
													</div>
													<div class="progress progress-xs">
														<div class="progress-bar" style="width: 70%;">
															<span class="sr-only">70% Complete</span>
														</div>
													</div>
												</li>
												<li>
													<div class="clearfix">
														<p class="pull-left mar-no">Outcome</p>
														<p class="pull-right mar-no">10%</p>
													</div>
													<div class="progress progress-xs">
														<div class="progress-bar progress-bar-info" style="width: 10%;">
															<span class="sr-only">10% Complete</span>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>


							</div>
							<!--===================================================-->
							<!--End network line chart-->

						</div>
						<div class="col-lg-5">
							<div class="row">
								<div class="col-sm-6 col-lg-6">

									<!--Sparkline Area Chart-->
									<div class="panel panel-success panel-colorful">

										<div class="pad-all">
											<p class="text-lg text-semibold">
												<i class="pli-data-storage icon-fw"></i> HDD Usage</p>
											<p class="mar-no">
												<span class="pull-right text-bold">132Gb</span>
												Free Space
											</p>
											<p class="mar-no">
												<span class="pull-right text-bold">1,45Gb</span>
												Used space
											</p>
										</div>
										<div class="pad-all text-center">

											<!--Placeholder-->
											<div id="demo-sparkline-area"></div>

										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6">

									<!--Sparkline Line Chart-->
									<div class="panel panel-info panel-colorful">
										<div class="pad-all">
											<p class="text-lg text-semibold">
												<i class="pli-wallet-2 icon-fw"></i> Earning</p>
											<p class="mar-no">
												<span class="pull-right text-bold">$764</span>
												Today
											</p>
											<p class="mar-no">
												<span class="pull-right text-bold">$1,332</span>
												Last 7 Day
											</p>
										</div>
										<div class="pad-all text-center">

											<!--Placeholder-->
											<div id="demo-sparkline-line"></div>

										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 col-lg-6">

									<!--Sparkline bar chart -->
									<div class="panel panel-purple panel-colorful">
										<div class="pad-all">
											<p class="text-lg text-semibold">
												<i class="pli-bag-coins icon-fw"></i> Sales</p>
											<p class="mar-no">
												<span class="pull-right text-bold">$764</span>
												Today
											</p>
											<p class="mar-no">
												<span class="pull-right text-bold">$1,332</span>
												Last 7 Day
											</p>
										</div>
										<div class="pad-all text-center">

											<!--Placeholder-->
											<div id="demo-sparkline-bar" class="box-inline"></div>

										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6">

									<!--Sparkline pie chart -->
									<div class="panel panel-warning panel-colorful">
										<div class="pad-all">
											<p class="text-lg text-semibold">
												<i class="pli-check icon-fw"></i> Task Progress</p>
											<p class="mar-no">
												<span class="pull-right text-bold">34</span>
												Completed
											</p>
											<p class="mar-no">
												<span class="pull-right text-bold">79</span>
												Total
											</p>
										</div>
										<div class="pad-all">
											<ul class="list-group list-unstyled">
												<li class="mar-btm">
													<span class="label label-warning pull-right">15%</span>
													<p>Progress</p>
													<div class="progress progress-md">
														<div style="width: 15%;" class="progress-bar progress-bar-light">
															<span class="sr-only">15%</span>
														</div>
													</div>
												</li>
											</ul>
											<!--Placeholder-->
											<div id="demo-sparkline-pie" class="box-inline hidden"></div>
										</div>
									</div>
								</div>
							</div>


							<!--Extra Small Weather Widget-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel middle">
								<div class="media-left pad-all">
									<canvas id="demo-weather-xs-icon" width="48" height="48"></canvas>
								</div>

								<div class="media-body">
									<p class="text-2x mar-no">25&#176;</p>
									<p class="text-sm mar-no text-uppercase">Partly Cloudy Day</p>
								</div>
							</div>

							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<!--End Extra Small Weather Widget-->


						</div>
					</div>


					<!--Tiles - Bright Version-->
					<!--===================================================-->
					<div class="row">
						<div class="col-sm-6 col-lg-3">

							<!--Registered User-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel media pad-all">
								<div class="media-left">
									<span class="icon-wrap icon-wrap-xs bg-success">
										<i class="pli-male icon-3x"></i>
									</span>
								</div>

								<div class="media-body">
									<p class="text-2x mar-no text-semibold">241</p>
									<p class="text-muted mar-no">Registered User</p>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

						</div>
						<div class="col-sm-6 col-lg-3">

							<!--New Order-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel media pad-all">
								<div class="media-left">
									<span class="icon-wrap icon-wrap-xs bg-info">
										<i class="pli-add-cart icon-3x"></i>
									</span>
								</div>

								<div class="media-body">
									<p class="text-2x mar-no text-semibold">543</p>
									<p class="text-muted mar-no">New Order</p>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

						</div>
						<div class="col-sm-6 col-lg-3">

							<!--Comments-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel media pad-all">
								<div class="media-left">
									<span class="icon-wrap icon-wrap-xs bg-warning">
										<i class="pli-speech-bubble-7 icon-3x"></i>
									</span>
								</div>

								<div class="media-body">
									<p class="text-2x mar-no text-semibold">34</p>
									<p class="text-muted mar-no">Comments</p>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

						</div>
						<div class="col-sm-6 col-lg-3">

							<!--Sales-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel media pad-all">
								<div class="media-left">
									<span class="icon-wrap icon-wrap-xs bg-danger">
										<i class="pli-coin icon-3x"></i>
									</span>
								</div>

								<div class="media-body">
									<p class="text-2x mar-no text-semibold">654</p>
									<p class="text-muted mar-no">Sales</p>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

						</div>
					</div>
					<!--===================================================-->
					<!--End Tiles - Bright Version-->

					<div class="row">
						<div class="col-lg-4">
							<!--List Todo-->
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<div class="panel panel-trans">
								<div class="panel-heading">
									<div class="panel-control">
										<button class="btn btn-default">
											<i class="fa fa-gear"></i>
										</button>
									</div>
									<h3 class="panel-title">To do list</h3>
								</div>
								<div class="pad-ver">
									<ul class="list-group bg-trans list-todo mar-no">
										<li class="list-group-item">
											<label class="form-checkbox form-icon">
												<input type="checkbox">
												<span>Find an idea.
													<span class="label label-danger">Important</span>
												</span>
											</label>
										</li>
										<li class="list-group-item">
											<label class="form-checkbox form-icon active">
												<input type="checkbox" checked>
												<span>Do some work</span>
											</label>
										</li>
										<li class="list-group-item">
											<label class="form-checkbox form-icon">
												<input type="checkbox">
												<span>Read the book</span>
											</label>
										</li>
										<li class="list-group-item">
											<label class="form-checkbox form-icon">
												<input type="checkbox">
												<span>Upgrade server
													<span class="label label-warning">Warning</span>
												</span>
											</label>
										</li>
										<li class="list-group-item">
											<label class="form-checkbox form-icon active">
												<input type="checkbox" checked>
												<span>Redesign my logo
													<span class="label label-info">2 Mins</span>
												</span>
											</label>
										</li>
									</ul>
								</div>
								<div class="input-group pad-all">
									<input type="text" class="form-control" placeholder="New task" autocomplete="off">
									<span class="input-group-btn">
										<button type="button" class="btn btn-success">
											<i class="fa fa-plus"></i>
										</button>
									</span>
								</div>
							</div>
							<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							<!--End todo list-->
						</div>
						<div class="col-lg-4">
							<div class="panel panel-trans">
								<div class="panel-heading">
									<div class="panel-control">
										<a title="" data-html="true" data-container="body" data-original-title="&lt;h4 class='text-thin'&gt;Information&lt;/h4&gt;&lt;p style='width:150px'&gt;This is an information bubble to help the user.&lt;/p&gt;"
										 href="index.html#" class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip"></a>
									</div>
									<h3 class="panel-title">Services</h3>
								</div>
								<div class="bord-btm">
									<ul class="list-group bg-trans">
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" checked>
											</div>
											Online status
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" checked>
											</div>
											Show offline contact
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox">
											</div>
											Show my device icon
										</li>
									</ul>
								</div>
								<div class="panel-body">
									<div class="pad-btm">
										<p class="text-lg">Upgrade Progress</p>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-purple" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"
											 role="progressbar">
												<span class="sr-only">15%</span>
											</div>
										</div>
										<small class="text-muted">15% Completed</small>
									</div>
									<div class="pad-btm">
										<p class="text-lg">Database</p>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-success" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"
											 role="progressbar">
												<span class="sr-only">70%</span>
											</div>
										</div>
										<small class="text-muted">70% Completed</small>
									</div>
								</div>
							</div>
						</div>
						<div class='col-lg-4'>
							<div class="panel panel-trans">
								<div class="pad-all">
									<div class="media mar-btm">
										<div class="media-left">
											<img src="img/av6.png" class="img-md img-circle" alt="Avatar">
										</div>
										<div class="media-body">
											<p class="text-lg text-semibold mar-no">Brenda Fuller</p>
											<p>Project manager</p>
										</div>
									</div>
									<blockquote class="bq-sm bq-open">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</blockquote>
								</div>

								<div class="bord-top">
									<ul class="list-group bg-trans bord-no">
										<li class="list-group-item list-item-sm">
											<div class="media-left">
												<i class="fa fa-facebook-official fa-lg"></i>
											</div>
											<div class="media-body">
												<a href="index.html#" class="btn-link">Facebook</a>
											</div>
										</li>
										<li class="list-group-item list-item-sm">
											<div class="media-left">
												<i class="fa fa-twitter fa-lg"></i>
											</div>
											<div class="media-body">
												<a href="index.html#" class="btn-link">@BRfull</a>
												<br> Design my themes with
												<a href="index.html#" class="btn-link">#Bootstrap</a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
											</div>
										</li>
										<li class="list-group-item list-item-sm">
											<div class="media-left">
												<i class="fa fa-linkedin fa-lg"></i>
											</div>
											<div class="media-body">
												<a href="index.html#" class="btn-link">brendafull</a>
											</div>
										</li>
										<li class="list-group-item list-item-sm">
											<div class="media-body">

											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12">
							<div class="panel">
								<div class="panel-heading">
									<div class="panel-control">
										<a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="index.html#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>"
										 data-html="true" title=""></a>
									</div>
									<h3 class="panel-title">Order Status</h3>
								</div>

								<!--Data Table-->
								<!--===================================================-->
								<div class="panel-body">
									<div class="pad-btm form-inline">
										<div class="row">
											<div class="col-sm-6 table-toolbar-left">
												<button class="btn btn-purple btn-labeled fa fa-plus" id="demo-btn-addrow">Add</button>
												<button class="btn btn-default">
													<i class="fa fa-print"></i>
												</button>
												<div class="btn-group">
													<button class="btn btn-default">
														<i class="fa fa-exclamation-circle"></i>
													</button>
													<button class="btn btn-default">
														<i class="fa fa-trash"></i>
													</button>
												</div>
											</div>
											<div class="col-sm-6 table-toolbar-right">
												<div class="form-group">
													<input type="text" autocomplete="off" class="form-control" placeholder="Search" id="demo-input-search2">
												</div>
												<div class="btn-group">
													<button class="btn btn-default">
														<i class="fa fa fa-cloud-download"></i>
													</button>
													<div class="btn-group">
														<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															<i class="fa fa-cog"></i>
															<span class="caret"></span>
														</button>
														<ul class="dropdown-menu dropdown-menu-right" role="menu">
															<li>
																<a href="index.html#">Action</a>
															</li>
															<li>
																<a href="index.html#">Another action</a>
															</li>
															<li>
																<a href="index.html#">Something else here</a>
															</li>
															<li class="divider"></li>
															<li>
																<a href="index.html#">Separated link</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Invoice</th>
													<th>User</th>
													<th>Order date</th>
													<th>Amount</th>
													<th class="text-center">Status</th>
													<th class="text-center">Tracking Number</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<a href="index.html#" class="btn-link"> Order #53431</a>
													</td>
													<td>Steve N. Horton</td>
													<td>
														<span class="text-muted">
															<i class="fa fa-clock-o"></i> Oct 22, 2014</span>
													</td>
													<td>$45.00</td>
													<td class="text-center">
														<div class="label label-table label-success">Paid</div>
													</td>
													<td class="text-center">-</td>
												</tr>
												<tr>
													<td>
														<a href="index.html#" class="btn-link"> Order #53432</a>
													</td>
													<td>Charles S Boyle</td>
													<td>
														<span class="text-muted">
															<i class="fa fa-clock-o"></i> Oct 24, 2014</span>
													</td>
													<td>$245.30</td>
													<td class="text-center">
														<div class="label label-table label-info">Shipped</div>
													</td>
													<td class="text-center">
														<i class="fa fa-plane"></i> CGX0089734531</td>
												</tr>
												<tr>
													<td>
														<a href="index.html#" class="btn-link"> Order #53433</a>
													</td>
													<td>Lucy Doe</td>
													<td>
														<span class="text-muted">
															<i class="fa fa-clock-o"></i> Oct 24, 2014</span>
													</td>
													<td>$38.00</td>
													<td class="text-center">
														<div class="label label-table label-info">Shipped</div>
													</td>
													<td class="text-center">
														<i class="fa fa-plane"></i> CGX0089934571</td>
												</tr>
												<tr>
													<td>
														<a href="index.html#" class="btn-link"> Order #53434</a>
													</td>
													<td>Teresa L. Doe</td>
													<td>
														<span class="text-muted">
															<i class="fa fa-clock-o"></i> Oct 15, 2014</span>
													</td>
													<td>$77.99</td>
													<td class="text-center">
														<div class="label label-table label-info">Shipped</div>
													</td>
													<td class="text-center">
														<i class="fa fa-plane"></i> CGX0089734574</td>
												</tr>
												<tr>
													<td>
														<a href="index.html#" class="btn-link"> Order #53435</a>
													</td>
													<td>Teresa L. Doe</td>
													<td>
														<span class="text-muted">
															<i class="fa fa-clock-o"></i> Oct 12, 2014</span>
													</td>
													<td>$18.00</td>
													<td class="text-center">
														<div class="label label-table label-success">Paid</div>
													</td>
													<td class="text-center">-</td>
												</tr>
												<tr>
													<td>
														<a href="index.html#" class="btn-link">Order #53437</a>
													</td>
													<td>Charles S Boyle</td>
													<td>
														<span class="text-muted">
															<i class="fa fa-clock-o"></i> Oct 17, 2014</span>
													</td>
													<td>$658.00</td>
													<td class="text-center">
														<div class="label label-table label-danger">Refunded</div>
													</td>
													<td class="text-center">-</td>
												</tr>
												<tr>
													<td>
														<a href="index.html#" class="btn-link">Order #536584</a>
													</td>
													<td>Scott S. Calabrese</td>
													<td>
														<span class="text-muted">
															<i class="fa fa-clock-o"></i> Oct 19, 2014</span>
													</td>
													<td>$45.58</td>
													<td class="text-center">
														<div class="label label-table label-warning">Unpaid</div>
													</td>
													<td class="text-center">-</td>
												</tr>
											</tbody>
										</table>
									</div>
									<hr>
									<div class="pull-right">
										<ul class="pagination text-nowrap mar-no">
											<li class="page-pre disabled">
												<a href="index.html#">&lt;</a>
											</li>
											<li class="page-number active">
												<span>1</span>
											</li>
											<li class="page-number">
												<a href="index.html#">2</a>
											</li>
											<li class="page-number">
												<a href="index.html#">3</a>
											</li>
											<li>
												<span>...</span>
											</li>
											<li class="page-number">
												<a href="index.html#">9</a>
											</li>
											<li class="page-next">
												<a href="index.html#">&gt;</a>
											</li>
										</ul>
									</div>
								</div>
								<!--===================================================-->
								<!--End Data Table-->

							</div>
						</div>
					</div>



				</div>
				<!--===================================================-->
				<!--End page content-->


			</div>