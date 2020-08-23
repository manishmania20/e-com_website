<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/smarthr/blue/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2019 07:16:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Chat - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
                <div class="page-title-box pull-left">
					<h3>Focus Technologies</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					<li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="media-list">
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">
													<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
												</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="m-0"><span class="notification-time">4 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="m-0"><span class="notification-time">6 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">L</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="m-0"><span class="notification-time">8 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">G</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="m-0"><span class="notification-time">12 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="m-0"><span class="notification-time">2 days ago</span></p>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<li class="dropdown hidden-xs">
						<a href="javascript:;" id="open_msg_box" class="hasnotifications"><i class="fa fa-comment-o"></i> <span class="badge bg-purple pull-right">8</span></a>
					</li>	
					<li class="dropdown">
						<a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span>Admin</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profile.html">My Profile</a></li>
							<li><a href="edit-profile.html">Edit Profile</a></li>
							<li><a href="settings.html">Settings</a></li>
							<li><a href="login.html">Logout</a></li>
						</ul>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="profile.html">My Profile</a></li>
						<li><a href="edit-profile.html">Edit Profile</a></li>
						<li><a href="settings.html">Settings</a></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
							<li> 
								<a href="index.php"><i class="la la-home"></i> <span>Back to Home</span></a>
							</li>
							<li class="menu-title">Chat Groups <a href="#" data-toggle="modal" data-target="#add_group"><i class="fa fa-plus"></i></a></li>
							<li> 
								<a href="chat.html">#General</a>
							</li>
							<li> 
								<a href="chat.html">#Video Responsive Survey</a>
							</li>
							<li> 
								<a href="chat.html">#500rs</a>
							</li>
							<li> 
								<a href="chat.html">#warehouse</a>
							</li>
							<li class="menu-title">Direct Chats <a href="#" data-toggle="modal" data-target="#add_chat_user"><i class="fa fa-plus"></i></a></li>
							<li> 
								<a href="chat.html"><span class="status online"></span> John Doe <span class="badge bg-danger pull-right">1</span></a>
							</li>
							<li> 
								<a href="chat.html"><span class="status offline"></span> Richard Miles <span class="badge bg-danger pull-right">18</span></a>
							</li>
							<li> 
								<a href="chat.html"><span class="status away"></span> John Smith</a>
							</li>
							<li class="active"> 
								<a href="chat.html"><span class="status online"></span> Mike Litorus <span class="badge bg-danger pull-right">108</span></a>
							</li>
						</ul>
					</div>
                </div>
            </div>
            <div class="page-wrapper">
				<div class="chat-main-row">
					<div class="chat-main-wrapper">
						<div class="col-xs-9 message-view task-view">
							<div class="chat-window">
								<div class="chat-header">
									<div class="navbar">
										<div class="user-details">
											<div class="pull-left user-img m-r-10">
												<a href="profile.html" title="Mike Litorus"><img src="assets/img/user.jpg" alt="" class="w-40 img-circle"><span class="status online"></span></a>
											</div>
											<div class="user-info pull-left">
												<a href="profile.html" title="Mike Litorus"><span class="font-bold">Mike Litorus</span> <i class="typing-text">Typing...</i></a>
												<span class="last-seen">Last seen today at 7:50 AM</span>
											</div>
										</div>
										<ul class="nav navbar-nav pull-right chat-menu">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
												<ul class="dropdown-menu">
													<li><a href="javascript:void(0)">Delete Conversations</a></li>
													<li><a href="javascript:void(0)">Settings</a></li>
												</ul>
											</li>
										</ul>
										<a href="#task_window" class="task-chat profile-rightbar pull-right"><i class="fa fa-user" aria-hidden="true"></i></a>
										<div class="message-search pull-right">
											<div class="input-group input-group-sm">
												<input type="text" class="form-control" placeholder="Search" required="">
												<span class="input-group-btn">
													<button class="btn" type="button"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="chat-contents">
									<div class="chat-content-wrap">
										<div class="chat-wrap-inner">
											<div class="chat-box">
												<div class="chats">
													<div class="chat chat-right">
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>Hello. What can I do for you?</p>
																	<span class="chat-time">8:30 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat-line">
														<span class="chat-date">October 8th, 2015</span>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>I'm just looking around.</p>
																	<p>Will you tell me something about yourself? </p>
																	<span class="chat-time">8:35 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>Are you there? That time!</p>
																	<span class="chat-time">8:40 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-right">
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>Where?</p>
																	<span class="chat-time">8:35 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>OK, my name is Limingqiang. I like singing, playing basketballand so on.</p>
																	<span class="chat-time">8:42 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
															<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>You wait for notice.</p>
																	<span class="chat-time">8:30 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>Consectetuorem ipsum dolor sit?</p>
																	<span class="chat-time">8:50 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>OK?</p>
																	<span class="chat-time">8:55 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
															<div class="chat-bubble">
																<div class="chat-content img-content">
																	<div class="chat-img-group clearfix">
																		<p>Uploaded 3 Images</p>
																		<a class="chat-img-attach" href="#">
																			<img width="182" height="137" alt="" src="assets/img/placeholder.png">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">placeholder.png</div>
																				<div class="chat-file-desc">842 KB</div>
																			</div>
																		</a>
																		<a class="chat-img-attach" href="#">
																			<img width="182" height="137" alt="" src="assets/img/placeholder.png">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">842 KB</div>
																			</div>
																		</a>
																		<a class="chat-img-attach" href="#">
																			<img width="182" height="137" alt="" src="assets/img/placeholder.png">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">placeholder.png</div>
																				<div class="chat-file-desc">842 KB</div>
																			</div>
																		</a>
																	</div>
																	<span class="chat-time">9:00 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-right">
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>OK!</p>
																	<span class="chat-time">9:00 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>Uploaded 3 files</p>
																	<ul class="attach-list">
																		<li><i class="fa fa-file"></i> <a href="#">example.avi</a></li>
																		<li><i class="fa fa-file"></i> <a href="#">activity.psd</a></li>
																		<li><i class="fa fa-file"></i> <a href="#">example.psd</a></li>
																	</ul>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>Consectetuorem ipsum dolor sit?</p>
																	<span class="chat-time">8:50 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>OK?</p>
																	<span class="chat-time">8:55 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-right">
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content img-content">
																	<div class="chat-img-group clearfix">
																		<p>Uploaded 6 Images</p>
																		<a class="chat-img-attach" href="#">
																			<img width="182" height="137" alt="" src="assets/img/placeholder.png">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">placeholder.png</div>
																				<div class="chat-file-desc">842 KB</div>
																			</div>
																		</a>
																		<a class="chat-img-attach" href="#">
																			<img width="182" height="137" alt="" src="assets/img/placeholder.png">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">842 KB</div>
																			</div>
																		</a>
																		<a class="chat-img-attach" href="#">
																			<img width="182" height="137" alt="" src="assets/img/placeholder.png">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">placeholder.png</div>
																				<div class="chat-file-desc">842 KB</div>
																			</div>
																		</a>
																		<a class="chat-img-attach" href="#">
																			<img width="182" height="137" alt="" src="assets/img/placeholder.png">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">placeholder.png</div>
																				<div class="chat-file-desc">842 KB</div>
																			</div>
																		</a>
																		<a class="chat-img-attach" href="#">
																			<img width="182" height="137" alt="" src="assets/img/placeholder.png">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">placeholder.png</div>
																				<div class="chat-file-desc">842 KB</div>
																			</div>
																		</a>
																		<a class="chat-img-attach" href="#">
																			<img width="182" height="137" alt="" src="assets/img/placeholder.png">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">placeholder.png</div>
																				<div class="chat-file-desc">842 KB</div>
																			</div>
																		</a>
																	</div>
																	<span class="chat-time">9:00 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<ul class="attach-list">
																		<li class="pdf-file"><i class="fa fa-file-pdf-o"></i> <a href="#">Document_2016.pdf</a></li>
																	</ul>
																	<span class="chat-time">9:00 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>	
													<div class="chat chat-right">
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<ul class="attach-list">
																		<li class="pdf-file"><i class="fa fa-file-pdf-o"></i> <a href="#">Document_2016.pdf</a></li>
																	</ul>
																	<span class="chat-time">9:00 am</span>
																</div>
																<div class="chat-action-btns">
																	<ul>
																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg" title="Edit"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg" title="Delete"><i class="fa fa-trash-o"></i></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<p>Typing ...</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="chat-footer">
									<div class="message-bar">
										<div class="message-inner">
											<a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="assets/img/attachment.png" alt=""></a>
											<div class="message-area"><div class="input-group">
												<textarea class="form-control" placeholder="Type message..."></textarea>
												<span class="input-group-btn">
													<button class="btn btn-primary" type="button"><i class="fa fa-send"></i></button>
												</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-3 profile-right fixed-sidebar-right chat-profile-view" id="task_window">
							<div class="display-table profile-right-inner">
								<div class="table-row">
									<div class="table-body">
										<div class="table-content">
											<div class="chat-profile-img">
												<div class="edit-profile-img">
													<img class="avatar" src="assets/img/user.jpg" alt="">
													<span class="change-img">Change Image</span>
												</div>
												<h3 class="user-name m-t-10 m-b-0">John Doe</h3>
												<small class="text-muted">Web Designer</small>
												<a href="edit-profile.html" class="btn btn-primary edit-btn"><i class="fa fa-pencil"></i></a>
											</div>
											<div class="chat-profile-info">
												<ul class="user-det-list">
													<li>
														<span>Username:</span>
														<span class="pull-right text-muted">johndoe</span>
													</li>
													<li>
														<span>DOB:</span>
														<span class="pull-right text-muted">24 July</span>
													</li>
													<li>
														<span>Email:</span>
														<span class="pull-right text-muted">johndoe@example.com</span>
													</li>
													<li>
														<span>Phone:</span>
														<span class="pull-right text-muted">9876543210</span>
													</li>
												</ul>
											</div>
											<div class="tabbable">
												<ul class="nav nav-tabs nav-tabs-solid nav-justified m-b-0">
													<li class="active"><a href="#all_files" data-toggle="tab">All Files</a></li>
													<li><a href="#my_files" data-toggle="tab">My Files</a></li>
												</ul>
												<div class="tab-content">
													<div class="tab-pane active" id="all_files">
														<ul class="files-list">
															<li>
																<div class="files-cont">
																	<div class="file-type">
																		<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
																	</div>
																	<div class="files-info">
																		<span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
																		<span class="file-author"><a href="#">Loren Gatlin</a></span> <span class="file-date">May 31st at 6:53 PM</span>
																	</div>
																	<ul class="files-action">
																		<li class="dropdown">
																			<a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
																			<ul class="dropdown-menu">
																				<li><a href="javascript:void(0)">Download</a></li>
																				<li><a href="#" data-toggle="modal" data-target="#share_files">Share</a></li>
																			</ul>
																		</li>
																	</ul>
																</div>
															</li>
														</ul>
													</div>
													<div class="tab-pane" id="my_files">
														<ul class="files-list">
															<li>
																<div class="files-cont">
																	<div class="file-type">
																		<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
																	</div>
																	<div class="files-info">
																		<span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
																		<span class="file-author"><a href="#">John Doe</a></span> <span class="file-date">May 31st at 6:53 PM</span>
																	</div>
																	<ul class="files-action">
																		<li class="dropdown">
																			<a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
																			<ul class="dropdown-menu">
																				<li><a href="javascript:void(0)">Download</a></li>
																				<li><a href="#" data-toggle="modal" data-target="#share_files">Share</a></li>
																			</ul>
																		</li>
																	</ul>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="drag_files" class="modal custom-modal fade center-modal" role="dialog">
					<div class="modal-dialog">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Drag and drop files upload</h3>
							</div>
							<div class="modal-body p-t-0">
                                <form id="js-upload-form">
									<div class="upload-drop-zone" id="drop-zone">
										<i class="fa fa-cloud-upload fa-2x"></i> <span class="upload-text">Just drag and drop files here</span>
									</div>
                                    <h4>Uploading</h4>
                                    <ul class="upload-list">
                                        <li class="file-list">
                                            <div class="upload-wrap">
                                                <div class="file-name">
                                                    <i class="fa fa-photo"></i>
                                                    photo.png
                                                </div>
                                                <div class="file-size">1.07 gb</div>
                                                <button type="button" class="file-close">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                            </div>
                                            <div class="progress progress-xs progress-striped">
												<div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
											</div>
                                            <div class="upload-process">37% done</div>
                                        </li>
                                        <li class="file-list">
                                            <div class="upload-wrap">
                                                <div class="file-name">
                                                    <i class="fa fa-file"></i>
                                                    task.doc
                                                </div>
                                                <div class="file-size">5.8 kb</div>
                                                <button type="button" class="file-close">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                            </div>
                                            <div class="progress progress-xs progress-striped">
												<div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
											</div>
                                            <div class="upload-process">37% done</div>
                                        </li>
                                        <li class="file-list">
                                            <div class="upload-wrap">
                                                <div class="file-name">
                                                    <i class="fa fa-photo"></i>
                                                    dashboard.png
                                                </div>
                                                <div class="file-size">2.1 mb</div>
                                                <button type="button" class="file-close">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                            </div>
                                            <div class="progress progress-xs progress-striped">
												<div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
											</div>
                                            <div class="upload-process">Completed</div>
                                        </li>
                                    </ul>
                                </form>
								<div class="m-t-30 text-center">
								<button class="btn btn-primary btn-lg">Add to upload</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="add_group" class="modal custom-modal fade center-modal" role="dialog">
					<div class="modal-dialog">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Create a group</h3>
							</div>
							<div class="modal-body">
								<p>Groups are where your team communicates. They’re best when organized around a topic — #leads, for example.</p>
								<form>
								<div class="form-group">
									<label>Group Name <span class="text-danger">*</span></label>
									<input class="form-control" required="" type="text">
								</div>
								<div class="form-group">
									<label>Send invites to: <span class="text-muted-light">(optional)</span></label>
									<input class="form-control" required="" type="text">
								</div>
								<div class="m-t-50 text-center">
								<button class="btn btn-primary btn-lg">Create Group</button>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
				<div id="add_chat_user" class="modal custom-modal fade center-modal" role="dialog">
					<div class="modal-dialog">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Create Chat Group</h3>
							</div>
							<div class="modal-body">
								<div class="input-group m-b-30">
									<input placeholder="Search to start a chat" class="form-control search-input input-lg" id="btn-input" type="text">
									<span class="input-group-btn">
										<button class="btn btn-primary btn-lg">Search</button>
									</span>
								</div>
								<div>
									<h5>Recent Conversations</h5>
									<ul class="media-list media-list-linked chat-user-list">
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">J</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Jeffery Lalor</div>
													<span class="designation">Team Leader</span>
												</div>
												<div class="media-right media-middle text-nowrap">
													<div class="online-date">1 day ago</div>
												</div>
											</a>
										</li>
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">B</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Bernardo Galaviz</div>
													<span class="designation">Web Developer</span>
												</div>
												<div class="media-right media-middle text-nowrap">
													<div class="online-date">3 days ago</div>
												</div>
											</a>
										</li>
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left">
													<span class="avatar">
														<img src="assets/img/user.jpg" alt="John Doe">
													</span>
												</div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">John Doe</div>
													<span class="designation">Web Designer</span>
												</div>
												<div class="media-right media-middle text-nowrap">
													<div class="online-date">7 months ago</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="m-t-50 text-center">
									<button class="btn btn-primary btn-lg">Create Group</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="share_files" class="modal custom-modal fade center-modal" role="dialog">
					<div class="modal-dialog">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Share File</h3>
							</div>
							<div class="modal-body">
								<div class="files-share-list">
									<div class="files-cont">
										<div class="file-type">
											<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
										</div>
										<div class="files-info">
											<span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
											<span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span class="file-date">May 31st at 6:53 PM</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Share With</label>
									<input class="form-control" type="text">
								</div>
								<div class="m-t-50 text-center">
									<button class="btn btn-primary btn-lg">Share</button>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<div class="task-overlay" data-reff="#task_window"></div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/dropfiles.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2019 07:16:42 GMT -->
</html>