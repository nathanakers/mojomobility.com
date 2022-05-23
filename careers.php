<?php
// Include Functions & Headers
include('/_testing/includes/functions.php');
include('/_testing/includes/html-app-header.php');
include('/_testing/includes/html-content-header.php');
?>
<!-- // BEGIN PAGE CONTENT (inside #main div) -->


<?php
// End of Job Paragraph
$sendResumeTo = '
<p>Please submit your resume to&nbsp;<a href="mailto:hr@mojomobility.com">hr@mojomobility.com</a>.
    <br>Principals only. Recruiters: please do not contact Mojo Mobility for this position. Please, no phone calls about this job.
</p>
<hr>';
?>


<section id="content-careers">
    <div class="container">
        <div class="row">

            <div class="span5 span4-offset1-medium span4-offset2-large sidebar">
                <nav class="sidebar-affixed" id="jobnav">
                    <h2>Current Openings</h2>
                    <ul class="nav sidenav">
                        <li class="link-EM">
                            <a href="#job-EM" class="active">
                                <i class="icon-chevron-right"></i>
                                Electromagnetic Engineer
                            </a>
                        </li>
                        <li class="link-HWFW1">
                            <a href="#job-HWFW1" class="">
                                <i class="icon-chevron-right"></i>
                                Hardware/Firmware Engineer
                            </a>
                        </li>
                        <li class="link-MOJO_EE active">
                            <a href="#job-MOJO_EE" class="">
                                <i class="icon-chevron-right"></i>
                                Electrical Engineer
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="span11 span10-offset0-medium span8-offset0-large">
                <div class="maincolumn" id="joblistings">
                    <div class="joblisting" id="job-EM">
                        <h3>Electromagnetic Engineer</h3>
                        <p>This is an opportunity for an experienced electrical engineer with electromagnetic modeling experience who brings a solid background in magnetics and electromagnetic theory as well as real world implementations. Experience with simulation software is a requirement.</p>
                        <p>The technology includes power supply / magnetics design, battery charger design, analog and digital circuitry and microcontrollers for control. The candidate should be confident and capable of working on his / her own but also able to interact with other team members and provide oral and written reports.</p>

                        <h4>Duties and Responsibilities:</h4>
                        <ul>
                            <li>Simulation of electromagnetic systems using standard simulation software such as Infolytica MagNet, Comsol or Ansys.</li>
                            <li>Hands on experience in a lab environment to prove simulation results</li>
                            <li>Provide oral and written reports to management and customers</li>
                            <li>Participate in system architecture, design and implementation of wireless charging systems</li>
                        </ul>

                        <h4>Must have background exeperience as follows:</h4>
                        <ul>
                            <li>Experience with Electromagnetic Emission and other Regulatory standards</li>
                            <li>Flexibility to work in a small company start-up environment, and enthusiasm to handle a wide range of tasks as needed</li>
                            <li>Detail oriented and methodical</li>
                        </ul>

                        <h4>Education and Experience:</h4>
                        <ul>
                            <li>MS / PhD in Electrical Engineering</li>
                            <li>Min of 3 years of related Electrical Engineering experience</li>
                        </ul>

                        <h4>Additional Desirable Experience:</h4>
                        <ul>
                            <li>Power supply design experience</li>
                            <li>Thermal modeling experience</li>
                        </ul>

                        <?php echo $sendResumeTo; ?>
                    </div>
                    <div class="joblisting" id="job-HWFW1">
                        <h3>Hardware/Firmware Engineer</h3>
                        <p>This is an opportunity for an experienced hardware and firmware engineer to help develop our next generation products and technologies and advance our existing products. We are looking for a motivated individual, with up-to-date technical skills, who can design and implement embedded hardware and firmware to support our products for a variety of OEMs. The candidate should have knowledge of control methods for power systems and should be confident and capable of working on his / her own but also able to interact with other team members and provide oral and written reports to management. This is a hands-on position for product development with substantial growth opportunities.</p>

                        <h4>Duties and Responsibilities:</h4>
                        <ul>
                            <li>Key contributor to the firmware and hardware development on next-generation and existing platforms</li>
                            <li>Embedded firmware development using C/C++</li>
                            <li>Participate in system architecture, design and implementation&nbsp;</li>
                            <li>Setup and maintain integrated development environments</li>
                            <li>Assist in the electrical design of power, analog, and digital circuits</li>
                            <li>Provide oral and written reports to management</li>
                            <li>Participate in selection and qualification of microcontrollers and tools needed for product development</li>
                        </ul>

                        <h4>Must have background exeperience as follows:</h4>
                        <ul>
                            <li>Detailed knowledge of embedded microcontrollers such as Texas Instruments, Microchip and Silicon Laboratories Microcontrollers</li>
                            <li>Strong knowledge of C/C++</li>
                            <li>Experience with control and regulation of power supplies</li>
                            <li>Implementation of closed loop and PID loops for power and voltage control in power supplies</li>
                            <li>Strong familiarity with debugging tools</li>
                            <li>Experience in developing projects on resource-constrained embedded systems</li>
                            <li>Familiarity with common interfaces (I2C, USB, SPI,etc)</li>
                            <li>Excellent trouble-shooting skills</li>
                            <li>Excellent written and oral communication skills</li>
                            <li>Must be able to handle multiple projects and products concurrently</li>
                            <li>Must be local</li>
                        </ul>

                        <h4>Education and Experience:</h4>
                        <ul>
                            <li>BS/MS in Electrical Engineering or Computer Science or related field</li>
                            <li>Min 7 Years of related embedded development experience</li>
                        </ul>

                        <?php echo $sendResumeTo; ?>
                    </div>
                    <div class="joblisting" id="job-MOJO_EE">
                        <h3>Electrical Engineer</h3>
                        <p>This is an opportunity for an experienced electrical engineer who brings innovative electrical engineering and embedded system expertise to help the engineering team with various design, testing, and product development activities of the company. The technology includes power supply / magnetics design, battery charger design, analog and digital circuitry and microcontrollers for control. The candidate should be confident and capable of working on his / her own but also able to interact with other team members and provide oral and written reports. Experience with developing multiple simultaneous hardware and firmware products, product test requirements, FCC, UL, and EMI certification, documentation and working with manufacturing team to develop and manufacture products is necessary. This is a hands-on position for product development with substantial growth opportunities.</p>

                        <h4>Duties and Responsibilities:</h4>
                        <ul>
                            <li>Design of power, analog, and digital circuits</li>
                            <li>Design of closed loop and/or PID loops for power and voltage control in power supply</li>
                            <li>Testing and improvement of circuit designs</li>
                            <li>Circuit layout, outsourcing for build, assembly and testing</li>
                            <li>Electrical / mechanical / thermal characterization (modeling a plus)</li>
                            <li>Development of BOM, costing, design specs and test results</li>
                            <li>Provide oral and written reports to management and customers</li>
                            <li>Actively contribute to the firmware development</li>
                            <li>Familiarity with many various microcontrollers (Texas Instruments a plus)</li>
                        </ul>

                        <h4>Must have background exeperience as follows:</h4>
                        <ul>
                            <li>Current hands-on Engineering skills in hardware and firmware development for embedded systems</li>
                            <li>Demonstrated innovation with a track record of power design background</li>
                            <li>Circuit layout, build and assembly experience</li>
                            <li>Flexibility to work in a small company start-up environment, and enthusiasm to handle a wide range of tasks as needed</li>
                            <li>Must be local</li>
                        </ul>

                        <h4>Education and Experience:</h4>
                        <ul>
                            <li>Min of 7 years of related Electrical Engineering experience</li>
                            <li>BS/MS in Electrical Engineering</li>
                        </ul>

                        <h4>Additional Desirable Experience:</h4>
                        <ul>
                            <li>Power supply design experience</li>
                            <li>Some experience with Contract Manufacturers and Mobile devices</li>
                            <li>Experience with Electromagnetic Emission and other Regulatory standards</li>
                        </ul>

                        <?php echo $sendResumeTo; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> <!-- #content-careers -->


<!-- // END PAGE CONTENT -->
<?php
// Include Functions & Headers
include('/_testing/includes/html-content-footer.php');
include('/_testing/includes/html-app-footer.php');
?>