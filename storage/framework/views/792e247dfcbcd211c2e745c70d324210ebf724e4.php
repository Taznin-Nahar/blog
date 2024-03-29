  
 <?php $__env->startSection('admin_main_content'); ?>  



     <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Dashboard
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Metro Lab</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Dashboard
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <!--BEGIN METRO STATES-->
                <div class="metro-nav">
                    <div class="metro-nav-block nav-block-orange">
                        <a data-original-title="" href="#">
                            <i class="icon-user"></i>
                            <div class="info">321</div>
                            <div class="status">New User</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-yellow">
                        <a data-original-title="" href="#">
                            <i class="icon-tags"></i>
                            <div class="info">+970</div>
                            <div class="status">Sales</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-grey">
                        <a data-original-title="" href="#">
                            <i class="icon-comments-alt"></i>
                            <div class="info">49</div>
                            <div class="status">Comments</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-blue double">
                        <a data-original-title="" href="#">
                            <i class="icon-eye-open"></i>
                            <div class="info">+897</div>
                            <div class="status">Unique Visitor</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-red">
                        <a data-original-title="" href="#">
                            <i class="icon-bar-chart"></i>
                            <div class="info">+288</div>
                            <div class="status">Update</div>
                        </a>
                    </div>
                </div>
                <div class="metro-nav">
                    <div class="metro-nav-block nav-block-blue">
                        <a data-original-title="" href="#">
                            <i class="icon-shopping-cart"></i>
                            <div class="info">29</div>
                            <div class="status">New Order</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-green double">
                        <a data-original-title="" href="#">
                            <i class="icon-tasks"></i>
                            <div class="info">$37624</div>
                            <div class="status">Stock</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-orange">
                        <a data-original-title="" href="#">
                            <i class="icon-envelope"></i>
                            <div class="info">123</div>
                            <div class="status">Messages</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-purple">
                        <a data-original-title="" href="#">
                            <i class="icon-remove-sign"></i>
                            <div class="info">34</div>
                            <div class="status">Cancelled</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-grey ">
                        <a data-original-title="" href="#">
                            <i class="icon-external-link"></i>
                            <div class="info">$53412</div>
                            <div class="status">Total Profit</div>
                        </a>
                    </div>
                </div>
                <div class="space10"></div>
                <!--END METRO STATES-->
            </div>
            <div class="row-fluid">
                <div class="span6">
                    <!-- BEGIN CHART PORTLET-->
                    <div class="widget ">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Doughnut</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div class="text-center">
                                <canvas id="doughnut" height="300" width="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- END CHART PORTLET-->
                </div>
                <div class="span6">
                    <!-- BEGIN CHART PORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"> </i> Line</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div class="text-center">
                                <canvas id="line" height="300" width="450"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- END CHART PORTLET-->
                </div>
            </div>

            <div class="row-fluid">
                <div class="span7">
                    <!--BEGIN GENERAL STATISTICS-->
                    <div class="widget orange">
                        <div class="widget-title">
                            <h4><i class="icon-tasks"></i> General Statistics </h4>
                         <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                         </span>
                            <div class="update-btn">
                                <a href="javascript:;" class="btn update-easy-pie-chart"><i class="icon-repeat"></i> Update</a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="text-center">
                                <div class="easy-pie-chart">
                                    <div class="percentage success" data-percent="55"><span>55</span>%</div>
                                    <div class="title">New visits</div>
                                </div>
                                <div class="easy-pie-chart">
                                    <div class="percentage" data-percent="46"><span>46</span>%</div>
                                    <div class="title">Bounce rate</div>
                                </div>
                                <div class="easy-pie-chart">
                                    <div class="percentage" data-percent="92"><span>92</span>%</div>
                                    <div class="title">Server load</div>
                                </div>
                                <div class="easy-pie-chart">
                                    <div class="percentage" data-percent="84"><span>752</span>MB</div>
                                    <div class="title">Used RAM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END GENERAL STATISTICS-->
                </div>
                <div class="span5">
                    <!--BEGIN GENERAL STATISTICS-->
                    <div class="widget purple">
                        <div class="widget-title">
                            <h4><i class="icon-tasks"></i> General Statistics </h4>
                         <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                         </span>
                        </div>
                        <div class="widget-body">
                            <div class="row-fluid">
                                <div class="text-center">
                                    <div class="sparkline">
                                        <div id="metro-sparkline-type1"></div>
                                        <div class="sparkline-tittle">Server Load</div>
                                    </div>
                                    <div class="sparkline">
                                        <div id="metro-sparkline-type2"></div>
                                        <div class="sparkline-tittle">Network Load</div>
                                    </div>
                                    <div class="sparkline">
                                        <div id="metro-sparkline-type3"></div>
                                        <div class="sparkline-tittle">Visit Load</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END GENERAL STATISTICS-->
                </div>
            </div>
            <div class="row-fluid">
                 <div class="span6">
                     <!-- BEGIN NOTIFICATIONS PORTLET-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><i class="icon-bell"></i> Notification </h4>
                           <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                               <a href="javascript:;" class="icon-remove"></a>
                           </span>
                         </div>
                         <div class="widget-body">
                             <ul class="item-list scroller padding"  style="overflow: hidden; width: auto; height: 320px;" data-always-visible="1">
                                 <li>
                                     <span class="label label-success"><i class="icon-bell"></i></span>
                                     <span>New user registered.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">Just now</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-success"><i class="icon-bell"></i></span>
                                     <span>New order received.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">15 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Alerting a user account balance.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">3 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Alerting administrators staff.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">9 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Messages are not sent to users.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">10 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Web server #12 failed to relosd.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">3 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-success"><i class="icon-bell"></i></span>
                                     <span>New order received.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">40 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Alerting a user account balance.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">1 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Alerting administrators staff.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">1 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Messages are not sent to users.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">11 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Web server #12 failed to relosd.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">1 day ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-success"><i class="icon-bell"></i></span>
                                     <span>New order received.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">10 mins ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Alerting a user account balance.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">3 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Alerting administrators support staff.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">6 hours ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-important"><i class=" icon-bug"></i></span>
                                     <span>Messages are not sent to users.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">3 days ago</span>

                                     </div>
                                 </li>
                                 <li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span>Web server #12 failed to relosd.</span>
                                     <div class="pull-right">
                                         <span class="small italic ">1 day ago</span>

                                     </div>
                                 </li>
                             </ul>
                             <div class="space10"></div>
                             <a href="#" class="pull-right">View all notifications</a>
                             <div class="clearfix no-top-space no-bottom-space"></div>
                         </div>
                     </div>
                     <!-- END NOTIFICATIONS PORTLET-->
                 </div>
                 <div class="span6">
                     <!-- BEGIN CHAT PORTLET-->
                     <div class="widget red">
                         <div class="widget-title">
                             <h4><i class="icon-comments-alt"></i> Chats</h4>
                  <span class="tools">
                  <a href="javascript:;" class="icon-chevron-down"></a>
                  <a href="javascript:;" class="icon-remove"></a>
                  </span>
                         </div>
                         <div class="widget-body">
                             <div class="timeline-messages">
                                 <!-- Comment -->
                                 <div class="msg-time-chat">
                                     <a class="message-img" href="#"><img alt="" src="<?php echo e(asset('public/admin_asset/img/avatar1.jpg')); ?>" class="avatar"></a>
                                     <div class="message-body msg-in">
                                         <span class="arrow"></span>
                                         <div class="text">
                                             <p class="attribution"><a href="#">Jhon Doe</a> at 1:55pm, 13th April 2013</p>
                                             <p>Hello, How are you brother?</p>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- /comment -->

                                 <!-- Comment -->
                                 <div class="msg-time-chat">
                                     <a class="message-img" href="#"><img alt="" src="<?php echo e(asset('public/admin_asset/img/avatar2.jpg')); ?>" class="avatar"></a>
                                     <div class="message-body msg-out">
                                         <span class="arrow"></span>
                                         <div class="text">
                                             <p class="attribution"> <a href="#">Jonathan Smith</a> at 2:01pm, 13th April 2013</p>
                                             <p>I'm Fine, Thank you. What about you? How is going on?</p>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- /comment -->

                                 <!-- Comment -->
                                 <div class="msg-time-chat">
                                     <a class="message-img" href="#"><img alt="" src="<?php echo e(asset('public/admin_asset/img/avatar1.jpg')); ?>" class="avatar"></a>
                                     <div class="message-body msg-in">
                                         <span class="arrow"></span>
                                         <div class="text">
                                             <p class="attribution"><a href="#">Jhon Doe</a> at 2:03pm, 13th April 2013</p>
                                             <p>Yeah I'm fine too. Everything is going fine here.</p>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- /comment -->

                                 <!-- Comment -->
                                 <div class="msg-time-chat">
                                     <a class="message-img" href="#"><img alt="" src="<?php echo e(asset('public/admin_asset/img/avatar2.jpg')); ?>" class="avatar"></a>
                                     <div class="message-body msg-out">
                                         <span class="arrow"></span>
                                         <div class="text">
                                             <p class="attribution"><a href="#">Jonathan Smith</a> at 2:05pm, 13th April 2013</p>
                                             <p>well good to know that. anyway how much time you need to done your task?</p>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- /comment -->
                             </div>
                             <div class="chat-form">
                                 <div class="input-cont">
                                     <input type="text" placeholder="Type a message here..." />
                                 </div>
                                 <div class="btn-cont">
                                     <a href="javascript:;" class="btn btn-primary">Send</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- END CHAT PORTLET-->
                 </div>
             </div>
            <div class="row-fluid">
                <div class="span7 responsive" data-tablet="span7 fix-margin" data-desktop="span7">
                    <!-- BEGIN CALENDAR PORTLET-->
                    <div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-calendar"></i> Calendar</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div id="calendar" class="has-toolbar"></div>
                        </div>
                    </div>
                    <!-- END CALENDAR PORTLET-->
                </div>
                <div class="span5">
                    <!-- BEGIN PROGRESS PORTLET-->
                    <div class="widget purple">
                        <div class="widget-title">
                            <h4><i class="icon-tasks"></i> Task In progress </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <ul class="unstyled">
                                <li>
                                    <span class="btn btn-inverse"> <i class="icon-refresh"></i></span>  Update Jquery <strong class="label"> 48%</strong>
                                    <div class="space10"></div>
                                    <div class="progress">
                                        <div style="width: 48%;" class="bar"></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="btn btn-inverse"> <i class="icon-check"></i></span>  Update font awesome <strong class="label label-success"> 85%</strong>
                                    <div class="space10"></div>
                                    <div class="progress progress-success">
                                        <div style="width: 85%;" class="bar"></div>
                                    </div>
                                </li>
                                <li>
                                    <span class="btn btn-inverse"> <i class="icon-fire"></i></span>  Update CSS3 <strong class="label label-important"> 65%</strong>
                                    <div class="space10"></div>
                                    <div class="progress progress-danger">
                                        <div style="width: 65%;" class="bar"></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END PROGRESS PORTLET-->
                    <!-- BEGIN ALERTS PORTLET-->
                    <div class="widget orange">
                        <div class="widget-title">
                            <h4><i class="icon-bell-alt"></i> Alerts</h4>
                            <span class="tools">
                            <a class="icon-chevron-down" href="javascript:;"></a>
                            <a class="icon-remove" href="javascript:;"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div class="alert">
                                <button data-dismiss="alert" class="close">×</button>
                                <strong>Warning!</strong> Best check yo self, you're not looking too good.
                            </div>
                            <div class="alert alert-success">
                                <button data-dismiss="alert" class="close">×</button>
                                <strong>Success!</strong> You successfully read this important message.
                            </div>
                            <div class="alert alert-info">
                                <button data-dismiss="alert" class="close">×</button>
                                <strong>Info!</strong> Heads up! This alert needs your attention.
                            </div>
                            <div class="alert alert-error">
                                <button data-dismiss="alert" class="close">×</button>
                                <strong>Error!</strong> Change a few things. Please submit again.
                            </div>
                        </div>
                    </div>
                    <!-- END ALERTS PORTLET-->
                </div>
            </div>

            <!-- END PAGE CONTENT-->         
         </div>




 <?php $__env->stopSection(); ?>        
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* G:\xampp\htdocs\taznin_blog\taznin_blog\resources\views/admin/page/admin_home.blade.php */ ?>