<?php
/** Recommendation planning admin page — ksf_fa_recommendation. @package Ksfraser\FA\Recommendation */
namespace Ksfraser\FA\Recommendation;
function recommendation_planning_page(): void {
    $debtor_no = (int) ($_REQUEST['debtor_no'] ?? 0);
    echo '<h2>Recommendation Planning</h2><p>', htmlentities(render_page($debtor_no)), '</p>';
}
