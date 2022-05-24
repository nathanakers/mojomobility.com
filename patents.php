<?php
// Include Functions & Headers
include('includes/functions.php');
include('includes/html-app-header.php');
include('includes/html-content-header.php');
?>
<!-- // BEGIN PAGE CONTENT (inside #main div) -->


<?php
$patents = array(
    'US7948208.pdf' => array(
        'number' => 'US 7,948,208 B2',
        'title' => 'Power Source, Charging System, and Inductive Receiver for Mobile Devices',
    ),

    'US7952322B2.pdf' => array(
        'number' => 'US 7,952,322 B2',
        'title' => 'Inductive Power Source and Charging System',
    ),

    'US8169185.pdf' => array(
        'number' => 'US 8,169,185 B2',
        'title' => 'System and Method for Inductive Charging of Portable Devices',
    ),

    'US8629652.pdf' => array(
        'number' => 'US 8,629,652 B2',
        'title' => 'Power Source, Charging System, and Inductive Receiver for Mobile Devices',
    ),

    'US8629654.pdf' => array(
        'number' => 'US 8,629,654 B2',
        'title' => 'System and Method for Inductive Charging of Portable Devices',
    ),

    'US8890470.pdf' => array(
        'number' => 'US 8,890,470 B2',
        'title' => 'System for Wireless Power Transfer that Supports Interoperability, and Multi-Pole Magnets for Use Therewith',
    ),

    'US8896264.pdf' => array(
        'number' => 'US 8,896,264 B2',
        'title' => 'Inductive Charging with Support for Multiple Charging Protocols',
    ),

    'US8901881.pdf' => array(
        'number' => 'US 8,901,881 B2',
        'title' => 'Intelligent Initiation of Inductive Charging Process',
    ),

    'US8947047.pdf' => array(
        'number' => 'US 8,947,047 B2',
        'title' => 'Efficiency and Flexbility in Inductive Charging',
    ),

    'US9106083.pdf' => array(
        'number' => 'US 9,106,083 B2',
        'title' => 'Systems and Method for Positioning Freedom, and Support of Different Voltages, Protocols, and Power Levels in a Wireless Power System',
    ),

    'US9112362.pdf' => array(
        'number' => 'US 9,112,362 B2',
        'title' => 'Methods for Improved Transfer Efficiency in a Multi-Dimensional Inductive Charger',
    ),

    'US9112363.pdf' => array(
        'number' => 'US 9,112,363 B2',
        'title' => 'Intelligent Charging of Multiple Electric or Electronic Devices with a Multi-Dimensional Inductive Charger',
    ),

    'US9112364.pdf' => array(
        'number' => 'US 9,112,364 B2',
        'title' => 'Multi-Dimensional Inductive Charger and Applications Thereof',
    ),

    'US9178369.pdf' => array(
        'number' => 'US 9,178,369 B2',
        'title' => 'Systems and Methods for Providing Positioning Freedom, and Support of Different Voltages, Protocols, and Power Levels in a Wireless Power System',
    ),

    'US9276437.pdf' => array(
        'number' => 'US 9,276,437 B2',
        'title' => 'System and Method That Provides Efficiency and Flexblity in Inductive Charging',
    ),

    'US9356659.pdf' => array(
        'number' => 'US 9,356,659 B2',
        'title' => 'Chargers and Methods for Wireless Power Transfer',
    ),

    'US9461501.pdf' => array(
        'number' => 'US 9,461,501 B2',
        'title' => 'Power Source, Charging System, and Inductive Receiver for Mobile Devices',
    ),

    'US9496732.pdf' => array(
        'number' => 'US 9,496,732 B2',
        'title' => 'Systems and Methods for Wireless Power Transfer',
    ),

    'US9577440.pdf' => array(
        'number' => 'US 9,577.440 B2',
        'title' => 'Inductive Power Source and Charging System',
    ),

    'US9601943.pdf' => array(
        'number' => 'US 9,601,943 B2',
        'title' => 'Efficiency and Flexbility in Inductive Charging',
    ),

    'US9722447.pdf' => array(
        'number' => 'US 9,722,447 B2',
        'title' => 'System and Method for Charging or Powering Devices, Such as Robots, Electric Vehicles, or Other Mobile Devices or Equipment',
    ),

    'US9793721.pdf' => array(
        'number' => 'US 9,793,721 B2',
        'title' => 'Distributed Charging of Mobile Devices',
    ),

    'US9837846.pdf' => array(
        'number' => 'US 9,837,846 B2',
        'title' => 'System and Method for Powering or Charging Receivers or Devices Having Small Surface Areas or Volumes',
    ),

    'US10044229.pdf' => array(
        'number' => 'US 10,044,229 B2',
        'title' => 'Efficiencies and Flexibilities in Inductive Charging',
    ),

    'US10115520.pdf' => array(
        'number' => 'US 10,115,520 B2',
        'title' => 'Systems and Methods for Wireless Power Transfer',
    ),

    'US10141770.pdf' => array(
        'number' => 'US 10,141,770 B2',
        'title' => 'Powering and/or Charging with a Plurality of Protocols',
    ),

    'US10367369.pdf' => array(
        'number' => 'US 10,367,369 B2',
        'title' => 'System and Method for Charging or Powering Devices, Including Mobile Devices, Machines or Equipment',
    ),

    'US10594155.pdf' => array(
        'number' => 'US 10,594,155 B2',
        'title' => 'System and Method for Powering or Charging Small-Volume or Small-Surface Receivers or Devices',
    ),

    'US10714986.pdf' => array(
        'number' => 'US 10,714,986 B2',
        'title' => 'Intelligent Initiation of Inductive Charging Process',
    ),

    'US11114886.pdf' => array(
        'number' => 'US 11,114,886 B2',
        'title' => 'Powering or Charging Small-Volume or Small-Surface Receivers or Devices',
    ),

    'US11121580.pdf' => array(
        'number' => 'US 11,121,580 B2',
        'title' => 'Power Source, Charging System, and Inductive Receiver for Mobile Devices',
    ),

    'US11201500.pdf' => array(
        'number' => 'US 11,201,500 B2',
        'title' => 'Efficiencies and Flexibilities in Inductive (Wireless) Charging',
    ),

    'US11211975.pdf' => array(
        'number' => 'US 11,211,975 B2',
        'title' => 'Contextually Aware Charging of Mobile Devices',
    ),

    'US11283306.pdf' => array(
        'number' => 'US 11,283,306 B2',
        'title' => 'Magnet with Multiple Opposing Poles on a Surface for Use with Magnetically Sensitive Components',
    ),

    'US11292349.pdf' => array(
        'number' => 'US 11,292,349 B2',
        'title' => 'System and Method for Powering or Charging Receivers or Devices Having Small Surface Areas or Volumes',
    ),

    'US11316371.pdf' => array(
        'number' => 'US 11,316,371 B1',
        'title' => 'System and Method for Inductive Charging of Portable Devices',
    ),
);


$patentBoxes = '<div class="row">';
foreach ($patents as $ID => $patent) {
    $item = '
    <div class="span4 fourths">
        <a class="card" href="/assets/patents/' . $patent . '" target="_blank">
        <div class="hide-until-hover"><span><i class="icon-external-link-sign"></i></span></div>
        <h3 class="icons"><i class="icon-file-text"></i>&nbsp;' . $patent['number'] .'</h3>
        <p>' . $patent['title'] . '</p>
    </div>';
    $patentBoxes .= $item;
};
$patentBoxes .= '</div>';
?>


<section id="content-patents">
    <div class="container">
        <div class="row">
            <div class="span16 span14-offset1-medium span12-offset2-large">

                <h1>Mojo Mobility has been an early pioneer in wireless charging resulting in multiple innovations leading to a large patent portfolio. Below is a partial list of our issued and pending patent applications.</h1>
                <hr>

                <h2>ISSUED AND PENDING PATENTS</h2>
                <?php echo $patentBoxes; ?>
                <hr>

            </div>
        </div>
    </div>
</section> <!-- #content-patents -->


<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include('includes/html-content-footer.php');
include('includes/html-app-footer.php');
?>