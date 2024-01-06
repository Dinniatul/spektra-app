@extends('layouts.default')

@section('title', 'Unlimited Nav Tabs')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">Unlimited Nav Tabs</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Unlimited Nav Tabs <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	
	<!-- begin row -->
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-xl-3">
			<div class="m-b-10 text-inverse f-s-10"><b>MAIN FEATURES</b></div>
			<table class="text-inverse m-b-20 width-full">
				<tbody>
					<tr>
						<td>
							<i class="fa fa-laptop fa-lg pull-left fa-fw m-r-10 m-t-5 p-t-2"></i>
							<div class="m-t-4">Responsive in any screen size</div>
						</td>
					</tr>
					<tr>
						<td class="p-t-10">
							<i class="fa fa-crosshairs fa-lg pull-left fa-fw m-r-10 m-t-5 p-t-2"></i>
							<div class="m-t-4">Autofocus on Active Tabs</div>
						</td>
					</tr>
					<tr>
						<td class="p-t-10">
							<i class="fa fa-expand fa-lg pull-left fa-fw m-r-10 m-t-5 p-t-2"></i>
							<div class="m-t-4">Support Expand Features</div>
						</td>
					</tr>
					<tr>
						<td class="p-t-10">
							<i class="fa fa-wrench fa-lg pull-left fa-fw m-r-10 m-t-5 p-t-2"></i>
							<div class="m-t-4">Auto Show / Hide Next & Prev Button</div>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="alert alert-warning">
				<i class="fa fa-info-circle fa-lg m-r-5 pull-left m-t-2"></i> Unlimited Navigation Tabs is <b class="text-inverse">not compatible</b> with the bootstrap dropdown menu.
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-9 -->
		<div class="col-xl-9">
			<!-- begin panel -->
			<div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
				<!-- begin panel-heading -->
				<div class="panel-heading p-0">
					<!-- begin nav-tabs -->
					<div class="tab-overflow">
						<ul class="nav nav-tabs nav-tabs-inverse">
							<li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab" class="nav-link text-primary"><i class="fa fa-arrow-left"></i></a></li>
							<li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">Nav Tab 1</a></li>
							<li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link">Nav Tab 2</a></li>
							<li class="nav-item"><a href="#nav-tab-3" data-toggle="tab" class="nav-link">Nav Tab 3</a></li>
							<li class="nav-item"><a href="#nav-tab-4" data-toggle="tab" class="nav-link">Nav Tab 4</a></li>
							<li class="nav-item"><a href="#nav-tab-5" data-toggle="tab" class="nav-link">Nav Tab 5</a></li>
							<li class="nav-item"><a href="#nav-tab-6" data-toggle="tab" class="nav-link">Nav Tab 6</a></li>
							<li class="nav-item"><a href="#nav-tab-7" data-toggle="tab" class="nav-link">Nav Tab 7</a></li>
							<li class="nav-item"><a href="#nav-tab-8" data-toggle="tab" class="nav-link">Nav Tab 8</a></li>
							<li class="nav-item"><a href="#nav-tab-9" data-toggle="tab" class="nav-link">Nav Tab 9</a></li>
							<li class="nav-item"><a href="#nav-tab-10" data-toggle="tab" class="nav-link">Nav Tab 10</a></li>
							<li class="nav-item"><a href="#nav-tab-11" data-toggle="tab" class="nav-link">Nav Tab 11</a></li>
							<li class="nav-item"><a href="#nav-tab-12" data-toggle="tab" class="nav-link">Nav Tab 12</a></li>
							<li class="nav-item"><a href="#nav-tab-13" data-toggle="tab" class="nav-link">Nav Tab 13</a></li>
							<li class="nav-item"><a href="#nav-tab-14" data-toggle="tab" class="nav-link">Nav Tab 14</a></li>
							<li class="nav-item"><a href="#nav-tab-15" data-toggle="tab" class="nav-link">Nav Tab 15</a></li>
							<li class="nav-item next-button"><a href="javascript:;" data-click="next-tab" class="nav-link text-primary"><i class="fa fa-arrow-right"></i></a></li>
						</ul>
					</div>
					<!-- end nav-tabs -->
					<div class="panel-heading-btn mr-2 ml-2 d-flex">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-secondary" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					</div>
				</div>
				<!-- end panel-heading -->
				<!-- begin tab-content -->
				<div class="panel-body tab-content">
					<!-- begin tab-pane -->
					<div class="tab-pane fade active show" id="nav-tab-1">
						<h3 class="m-t-10">Nav Tab 1</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-2">
						<h3 class="m-t-10">Nav Tab 2</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-3">
						<h3 class="m-t-10">Nav Tab 3</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-4">
						<h3 class="m-t-10">Nav Tab 4</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-5">
						<h3 class="m-t-10">Nav Tab 5</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-6">
						<h3 class="m-t-10">Nav Tab 6</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-7">
						<h3 class="m-t-10">Nav Tab 7</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-8">
						<h3 class="m-t-10">Nav Tab 8</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-9">
						<h3 class="m-t-10">Nav Tab 9</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-10">
						<h3 class="m-t-10">Nav Tab 10</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-11">
						<h3 class="m-t-10">Nav Tab 11</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-12">
						<h3 class="m-t-10">Nav Tab 12</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-13">
						<h3 class="m-t-10">Nav Tab 13</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-14">
						<h3 class="m-t-10">Nav Tab 14</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-15">
						<h3 class="m-t-10">Nav Tab 15</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-16">
						<h3 class="m-t-10">Nav Tab 16</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-17">
						<h3 class="m-t-10">Nav Tab 17</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-18">
						<h3 class="m-t-10">Nav Tab 18</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-19">
						<h3 class="m-t-10">Nav Tab 19</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab-20">
						<h3 class="m-t-10">Nav Tab 20</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
				</div>
				<!-- end tab-content -->
			</div>
			<!-- end panel -->
			<!-- begin panel -->
			<div class="panel panel-default panel-with-tabs" data-sortable-id="ui-unlimited-tabs-2">
				<!-- begin panel-heading -->
				<div class="panel-heading p-0">
					<!-- begin nav-tabs -->
					<div class="tab-overflow">
						<ul class="nav nav-tabs">
							<li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab" class="text-inverse nav-link"><i class="fa fa-arrow-left"></i></a></li>
							<li class="nav-item"><a href="#nav-tab2-1" data-toggle="tab" class="nav-link">Nav Tab 1</a></li>
							<li class="nav-item"><a href="#nav-tab2-2" data-toggle="tab" class="nav-link">Nav Tab 2</a></li>
							<li class="nav-item"><a href="#nav-tab2-3" data-toggle="tab" class="nav-link">Nav Tab 3</a></li>
							<li class="nav-item"><a href="#nav-tab2-4" data-toggle="tab" class="nav-link">Nav Tab 4</a></li>
							<li class="nav-item"><a href="#nav-tab2-5" data-toggle="tab" class="nav-link">Nav Tab 5</a></li>
							<li class="nav-item"><a href="#nav-tab2-6" data-toggle="tab" class="nav-link">Nav Tab 6</a></li>
							<li class="nav-item"><a href="#nav-tab2-7" data-toggle="tab" class="nav-link">Nav Tab 7</a></li>
							<li class="nav-item"><a href="#nav-tab2-8" data-toggle="tab" class="nav-link">Nav Tab 8</a></li>
							<li class="nav-item"><a href="#nav-tab2-9" data-toggle="tab" class="nav-link">Nav Tab 9</a></li>
							<li class="nav-item"><a href="#nav-tab2-10" data-toggle="tab" class="nav-link">Nav Tab 10</a></li>
							<li class="nav-item"><a href="#nav-tab2-11" data-toggle="tab" class="nav-link">Nav Tab 11</a></li>
							<li class="nav-item"><a href="#nav-tab2-12" data-toggle="tab" class="nav-link active">Nav Tab 12</a></li>
							<li class="nav-item"><a href="#nav-tab2-13" data-toggle="tab" class="nav-link">Nav Tab 13</a></li>
							<li class="nav-item"><a href="#nav-tab2-14" data-toggle="tab" class="nav-link">Nav Tab 14</a></li>
							<li class="nav-item"><a href="#nav-tab2-15" data-toggle="tab" class="nav-link">Nav Tab 15</a></li>
							<li class="nav-item"><a href="#nav-tab2-11" data-toggle="tab" class="nav-link">Nav Tab 16</a></li>
							<li class="nav-item"><a href="#nav-tab2-17" data-toggle="tab" class="nav-link">Nav Tab 17</a></li>
							<li class="nav-item"><a href="#nav-tab2-18" data-toggle="tab" class="nav-link">Nav Tab 18</a></li>
							<li class="nav-item"><a href="#nav-tab2-19" data-toggle="tab" class="nav-link">Nav Tab 19</a></li>
							<li class="nav-item"><a href="#nav-tab2-20" data-toggle="tab" class="nav-link">Nav Tab 20</a></li>
							<li class="nav-item next-button"><a href="javascript:;" data-click="next-tab" class="text-inverse nav-link"><i class="fa fa-arrow-right"></i></a></li>
						</ul>
					</div>
					<!-- end nav-tabs -->
					<div class="panel-heading-btn mr-2 ml-2 d-flex">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					</div>
				</div>
				<!-- end panel-heading -->
				<!-- begin tab-content -->
				<div class="panel-body tab-content">
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-1">
						<h3 class="m-t-10">Nav Tab 1</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-2">
						<h3 class="m-t-10">Nav Tab 2</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-3">
						<h3 class="m-t-10">Nav Tab 3</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-4">
						<h3 class="m-t-10">Nav Tab 4</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-5">
						<h3 class="m-t-10">Nav Tab 5</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-6">
						<h3 class="m-t-10">Nav Tab 6</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-7">
						<h3 class="m-t-10">Nav Tab 7</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-8">
						<h3 class="m-t-10">Nav Tab 8</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-9">
						<h3 class="m-t-10">Nav Tab 9</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-10">
						<h3 class="m-t-10">Nav Tab 10</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-11">
						<h3 class="m-t-10">Nav Tab 11</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade active show" id="nav-tab2-12">
						<h3 class="m-t-10">Nav Tab 12</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-13">
						<h3 class="m-t-10">Nav Tab 13</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-14">
						<h3 class="m-t-10">Nav Tab 14</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-15">
						<h3 class="m-t-10">Nav Tab 15</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-16">
						<h3 class="m-t-10">Nav Tab 16</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-17">
						<h3 class="m-t-10">Nav Tab 17</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-18">
						<h3 class="m-t-10">Nav Tab 18</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-19">
						<h3 class="m-t-10">Nav Tab 19</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
					<!-- begin tab-pane -->
					<div class="tab-pane fade" id="nav-tab2-20">
						<h3 class="m-t-10">Nav Tab 20</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
							est diam sagittis orci, a ornare nisi quam elementum tortor. 
							Proin interdum ante porta est convallis dapibus dictum in nibh. 
							Aenean quis massa congue metus mollis fermentum eget et tellus. 
							Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
							nec eleifend orci eros id lectus.
						</p>
						<p>
							Aenean eget odio eu justo mollis consectetur non quis enim. 
							Vivamus interdum quam tortor, et sollicitudin quam pulvinar sit amet. 
							Donec facilisis auctor lorem, quis mollis metus dapibus nec. Donec interdum tellus vel mauris vehicula, 
							at ultrices ex gravida. Maecenas at elit tincidunt, vulputate augue vitae, vulputate neque.
							Aenean vel quam ligula. Etiam faucibus aliquam odio eget condimentum. 
							Cras lobortis, orci nec eleifend ultrices, orci elit pellentesque ex, eu sodales felis urna nec erat. 
							Fusce lacus est, congue quis nisi quis, sodales volutpat lorem.
						</p>
					</div>
					<!-- end tab-pane -->
				</div>
				<!-- end tab-content -->
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-9 -->
	</div>
	<!-- end row -->
@endsection