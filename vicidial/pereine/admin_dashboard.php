<?php

echo '<div class="row">';
			echo '<div class="col-xl-3 col-md-6">';
			echo '<!-- card -->';
			echo '<div class="card card-animate">';
			echo '<div class="card-body">';
			echo '<div class="d-flex align-items-center">';
			echo '<div class="flex-grow-1 overflow-hidden">';
			echo "<p class=\"text-uppercase fw-medium text-muted text-truncate mb-0\">"._QXZ("Agents Logged In")."</p>";
			echo '</div>';
			echo '<div class="flex-shrink-0">';
			echo '<h5 class="text-success fs-14 mb-0">';
			echo '<i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %';
			echo '</h5>';
			echo '</div>';
			echo '</div>';
			echo '<div class="d-flex align-items-end justify-content-between mt-4">';
			echo '<div>';
			echo "<h4 class=\"fs-22 fw-semibold ff-secondary mb-4\"><span class=\"counter-value\" data-target=\"559.25\">$agent_total</span></h4>";
			echo '<a href="realtime_report.php?report_display_type=HTML" class="text-decoration-underline">View details</a>';
			echo '</div>';
			echo '<div class="avatar-sm flex-shrink-0">';
			echo '<span class="avatar-title bg-success-subtle rounded fs-3">';
			echo '<i class="bx bx-dollar-circle text-success"></i>';
			echo '</span>';
			echo '</div>';
			echo '</div>';
			echo '</div><!-- end card body -->';
			echo '</div><!-- end card -->';
			echo '</div><!-- end col -->';

		
			echo '<div class="col-xl-3 col-md-6">';
			echo '<!-- card -->';
			echo '<div class="card card-animate">';
			echo '<div class="card-body">';
			echo '<div class="d-flex align-items-center">';
			echo '<div class="flex-grow-1 overflow-hidden">';
			echo "<p class=\"text-uppercase fw-medium text-muted text-truncate mb-0\">"._QXZ("Agents In Calls")."</p>";
			echo '</div>';
			echo '<div class="flex-shrink-0">';
			echo '<h5 class="text-danger fs-14 mb-0">';
			echo '<i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %';
			echo '</h5>';
			echo '</div>';
			echo '</div>';
			echo '<div class="d-flex align-items-end justify-content-between mt-4">';
			echo '<div>';
			echo "<h4 class=\"fs-22 fw-semibold ff-secondary mb-4\"><span class=\"counter-value\" data-target=\"559.25\">$agent_incall</span></h4>";
			echo '<a href="realtime_report.php?report_display_type=HTML" class="text-decoration-underline">View details</a>';
			echo '</div>';
			echo '<div class="avatar-sm flex-shrink-0">';
			echo '<span class="avatar-title bg-info-subtle rounded fs-3">';
			echo '<i class="bx bx-shopping-bag text-info"></i>';
			echo '</span>';
			echo '</div>';
			echo '</div>';
			echo '</div><!-- end card body -->';
			echo '</div><!-- end card -->';
			echo '</div><!-- end col -->';
			
			echo '<div class="col-xl-3 col-md-6">';
			echo '<!-- card -->';
			echo '<div class="card card-animate">';
			echo '<div class="card-body">';
			echo '<div class="d-flex align-items-center">';
			echo '<div class="flex-grow-1 overflow-hidden">';
			echo "<p class=\"text-uppercase fw-medium text-muted text-truncate mb-0\">"._QXZ("Active Calls")."</p>";
			echo '</div>';
			echo '<div class="flex-shrink-0">';
			echo '<h5 class="text-success fs-14 mb-0">';
			echo '<i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %';
			echo '</h5>';
			echo '</div>';
			echo '</div>';
			echo '<div class="d-flex align-items-end justify-content-between mt-4">';
			echo '<div>';
			echo "<h4 class=\"fs-22 fw-semibold ff-secondary mb-4\"><span class=\"counter-value\" data-target=\"559.25\">$agent_incall</span></h4>";
			echo '<a href="realtime_report.php?report_display_type=HTML" class="text-decoration-underline">View details</a>';
			echo '</div>';
			echo '<div class="avatar-sm flex-shrink-0">';
			echo '<span class="avatar-title bg-warning-subtle rounded fs-3">';
			echo '<i class="bx bx-user-circle text-warning"></i>';
			echo '</span>';
			echo '</div>';
			echo '</div>';
			echo '</div><!-- end card body -->';
			echo '</div><!-- end card -->';
			echo '</div><!-- end col -->';
			
			echo '<div class="col-xl-3 col-md-6">';
			echo '<!-- card -->';
			echo '<div class="card card-animate">';
			echo '<div class="card-body">';
			echo '<div class="d-flex align-items-center">';
			echo '<div class="flex-grow-1 overflow-hidden">';
			echo "<p class=\"text-uppercase fw-medium text-muted text-truncate mb-0\">"._QXZ("Calls Ringing")."</p>";
			echo '</div>';
			echo '<div class="flex-shrink-0">';
			echo '<h5 class="text-muted fs-14 mb-0">';
			echo '+0.00 %';
			echo '</h5>';
			echo '</div>';
			echo '</div>';
			echo '<div class="d-flex align-items-end justify-content-between mt-4">';
			echo '<div>';
			echo "<h4 class=\"fs-22 fw-semibold ff-secondary mb-4\"><span class=\"counter-value\" data-target=\"559.25\">$ringing_calls</span></h4>";
			echo '<a href="realtime_report.php?report_display_type=HTML" class="text-decoration-underline">View details</a>';
			echo '</div>';
			echo '<div class="avatar-sm flex-shrink-0">';
			echo '<span class="avatar-title bg-primary-subtle rounded fs-3">';
			echo '<i class="bx bx-wallet text-primary"></i>';
			echo '</span>';
			echo '</div>';
			echo '</div>';
			echo '</div><!-- end card body -->';
			echo '</div><!-- end card -->';
			echo '</div><!-- end col -->';
			echo '</div> <!-- end row-->';


echo '<div class="row">';
echo '<div class="card-body">';
echo '<div class="table-responsive table-card">';
echo '<table class="table table-bordered border-Info table-nowrap">';
echo '<thead class="text-muted table-light">';
echo '<tr>';
echo "<th scope=\"col\">"._QXZ("Records")."</th>";
echo "<th scope=\"col\">"._QXZ("Active")."</th>";
echo "<th scope=\"col\">"._QXZ("Inactive")."</th>";
echo "<th scope=\"col\">"._QXZ("Total")."</th>";
echo '</tr>';
echo '</thead>';
echo '<tbody>';
echo '<tr>';

echo '<td>';
echo '<div class="d-flex align-items-center">';
echo '<div class="flex-shrink-0 me-2">';
echo '<img src="../agc/pereine/velzon/assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle material-shadow" />';
echo '</div>';
echo "<div class=\"flex-grow-1\"><a href='$PHP_SELF?ADD=0A'>"._QXZ("Users")."</a></div>";
echo '</div>';
echo '</td>';
echo "<td>".($users["Y"]+0)."</td>";
echo '<td>';
echo "<span class=\"text-success\">".($users["N"]+0)."</span>";
echo '</td>';
echo "<td>".($users["Y"]+$users["N"]+0)."</td>";

echo '</tr><!-- end tr -->';
echo '<tr>';

echo '<td>';
echo '<div class="d-flex align-items-center">';
echo '<div class="flex-shrink-0 me-2">';
echo '<img src="../agc/pereine/velzon/assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle material-shadow" />';
echo '</div>';
echo "<div class=\"flex-grow-1\"><a href='$PHP_SELF?ADD=10A'>"._QXZ("Campaigns")."</a></div>";
echo '</div>';
echo '</td>';
echo "<td>".($campaigns["Y"]+0)."</td>";
echo '<td>';
echo "<span class=\"text-success\">".($campaigns["N"]+0)."</span>";
echo '</td>';
echo "<td>".($campaigns["Y"]+$campaigns["N"]+0)."</td>";

echo '</tr><!-- end tr -->';
echo '<tr>';

echo '<td>';
echo '<div class="d-flex align-items-center">';
echo '<div class="flex-shrink-0 me-2">';
echo '<img src="../agc/pereine/velzon/assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle material-shadow" />';
echo '</div>';
echo "<div class=\"flex-grow-1\"><a href='$PHP_SELF?ADD=100A'>"._QXZ("Lists")."</a></div>";
echo '</div>';
echo '</td>';
echo "<td>".($lists["Y"]+0)."</td>";
echo '<td>';
echo "<span class=\"text-success\">".($lists["N"]+0)."</span>";
echo '</td>';
echo "<td>".($lists["Y"]+$lists["N"]+0)."</td>";

echo '</tr><!-- end tr -->';
echo '<tr>';

echo '<td>';
echo '<div class="d-flex align-items-center">';
echo '<div class="flex-shrink-0 me-2">';
echo '<img src="../agc/pereine/velzon/assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle material-shadow" />';
echo '</div>';
echo "<div class=\"flex-grow-1\"><a href='$PHP_SELF?ADD=1000A'>"._QXZ("In-Groups")."</a></div>";
echo '</div>';
echo '</td>';
echo "<td>".($ingroups["Y"]+0)."</td>";
echo '<td>';
echo "<span class=\"text-success\">".($ingroups["N"]+0)."</span>";
echo '</td>';
echo "<td>".($ingroups["Y"]+$ingroups["N"]+0)."</td>";

echo '</tr><!-- end tr -->';
echo '<tr>';

echo '<td>';
echo '<div class="d-flex align-items-center">';
echo '<div class="flex-shrink-0 me-2">';
echo '<img src="../agc/pereine/velzon/assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle material-shadow" />';
echo '</div>';
echo "<div class=\"flex-grow-1\"><a href='$PHP_SELF?ADD=1300A'>"._QXZ("DIDs")."</a></div>";
echo '</div>';
echo '</td>';
echo "<td>".($dids["Y"]+0)."</td>";
echo '<td>';
echo "<span class=\"text-success\">".($dids["N"]+0)."</span>";
echo '</td>';
echo "<td>".($dids["Y"]+$dids["N"]+0)."</td>";

echo '</tr><!-- end tr -->';
echo '</tbody><!-- end tbody -->';
echo '</table><!-- end table -->';
echo '</div>';
echo '</div>';
echo '</div>';




?>