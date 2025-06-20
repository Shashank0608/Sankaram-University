<?php include('header-top.php'); ?>
<?php include('header-bottom.php'); ?>


<!-- Top Bar -->
<section class="py-2 border-bottom sticky-top" style="background-color: rgb(36, 38, 134); z-index: 1030;">
    <div class="container d-flex justify-content-end flex-wrap text-center text-md-start">
        <div>

            <a href="#" class="btn btn-warning">Admin Login</a>
            <a href="#" class="btn btn-warning">Student Login</a>
            <a href="#" class="btn btn-warning">Center Login</a>

        </div>
    </div>
</section>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom shadow-sm" style="padding-top: 0.25rem; padding-bottom: 0.25rem;">
    <div class="container-fluid d-flex justify-content-between align-items-center" style="padding-left:150px; padding-right: 150px;">
        <!-- Left: Logo and Toggler -->
        <div class="col-6 d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img src="https://sanskaramuniversity.ac.in/uploads/all/4/inner_logo.png" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Right: Navbar Links -->
        <div class="col-6">
            <div class="collapse navbar-collapse align-items-center justify-content-end" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="font-size: small;">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#aboutus">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#programm">Authorized Partner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#course">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#footer">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Banner -->
<section>
    <img src="web-assets/banner.jpg" class="img-fluid w-100" alt="Responsive image" style="height: auto; max-height: 450px; object-fit: cover;">

</section>

<!-- About University -->
<section class="aboutSection" id="aboutus">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="aboutUniverContent pe-md-4">
                    <h2 class="fw-bold mb-4" style="text-transform: uppercase;">About Sanskaram University</h2>
                    <p class="text-justify lightColor" style="margin: 0 auto; text-align: justify; width: 100%;">Sanskaram University, established in 2024 is an esteemed institution, under the Haryana Private Universities Act 2006 (Haryana Act No. 3 of 2024), marking a profound commitment to academic excellence and holistic development. Recognized by the University Grants Commission (UGC) under section 2(f) of the UGC Act 1956, our campus is strategically located just 40 km away from the bustling New Delhi International Airport.</p>
                    <p class="text-justify lightColor mt-2" style="margin: 0 auto; text-align: justify; width: 100%;">We take pride in our comprehensive recognition, including approvals from esteemed bodies such as the All India Council of Technical Education, Bar Council of India, Pharmacy Council of India, and Veterinary Council of India. We offer diverse programs spanning B.Tech with specializations in cutting-edge fields like Artificial Intelligence and Data Science, Law, Pharmacy, Agriculture, Management, and BMLT, we prepare our students to lead in an ever-evolving global landscape.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="aboutLVImg">
                    <img src="web-assets/about.webp" class="shadow-sm rounded border" alt="about" width="100%" height="300" style=" margin-left: 50px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LUMEEN EDU SERVICES -->
<section class="paddingBottom aboutProgrammSec" id="programm" style="background: #D3D3D3; margin-top: 20px;">
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-5 mx-auto">
                <div class="aboutProImg" style="display: flex; justify-content: center; margin-top: 60px; margin-right: 10px;">
                    <img src="web-assets/lumeen.jpg" alt="LV Programme" class="rounded" width="70%">
                </div>
            </div>
            <div class="col-lg-7" style="padding-top: 50px; padding-bottom: 50px">
                <div class="aboutProText">
                    <h3 class="fw-bold mb-4" style="text-transform: uppercase;">LUMEEN EDU SERVICES (VERTICAL BRIDGE PARTNER)</h3>
                    <p class="" style="margin: 0 auto; text-align: justify; width: 100%;">Lumeen Edu Services has been established 15 years ago, with a vision of Empowering Students with right Certification and Academic Skills, started in 2010 with a dream of achieving heights in Education & Skilling Sector. Today as an Organisation we have successfully inclined ourselves in this sector,working with other domains like Vocationals , PHD and various others.Collaborating with reputed Universities across PAN India.</p>
                </div>
                <div class="has-sub-menu active mt-5">
                    <h5 class="fw-bold">To Connect:</h5>
                    <p class="fw-bold">
                        <span style="display: inline-flex;align-items: center;justify-content: center;width: 24px;height: 24px;border-radius: 50%;background-color: #003f75;color: white;font-size: 16px;font-weight: bold;">&#10003;</span>
                        Contact Number: <a href="tel:+918178909792" role="button" style="color:rgb(99, 14, 14); text-decoration: none;">+91-8178909792</a>
                    </p>
                    <p class="fw-bold">
                        <span style="display: inline-flex;align-items: center;justify-content: center;width: 24px;height: 24px;border-radius: 50%;background-color: #003f75;color: white;font-size: 16px;font-weight: bold;">&#10003;</span>
                        Contact Email:
                        <a href="mailto: sai.lumeen@s2code.com" style="color:rgb(99, 14, 14); text-decoration: none;">vocational@sanskaramuniversity.ac.in</a>
                    </p>
                    <p class="fw-bold">
                        <span style="display: inline-flex;align-items: center;justify-content: center;width: 24px;height: 24px;border-radius: 50%;background-color: #003f75;color: white;font-size: 16px;font-weight: bold;">&#10003;</span>
                        Address: <span class="" style="color:rgb(99, 14, 14)">Sector 62, Noida, Uttar Pradesh 201309.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- UGC B.Voc Program -->
<section class="ugcScheme" id="ugc-scheme" style="margin-top: 50px;">
    <div class="container" style="margin-top: 50px;">
        <div class="row mb-5">
            <div class="col-md-7">
                <div class="schemeText">
                    <h2 class="fw-bold mb-4" style="text-transform: uppercase;">UGC-B.VOC SCHEME</h2>
                    <p style="margin: 0 auto; text-align: justify; width: 100%;">The University Grants Commission (UGC) has introduced a skill development initiative aimed at integrating vocational training into higher education. This scheme leads to the award of a Bachelor of Vocation (B.Voc.) degree, with multiple exit options such as a Diploma or Advanced Diploma, under the National Skill Qualifications Framework (NSQF). The B.Voc. program is designed for universities and colleges to provide students with both specialized vocational skills and a broad-based education. By combining industry-specific job roles and general academic knowledge, the program prepares graduates to contribute to India's economic development by securing meaningful employment, launching entrepreneurial ventures, and generating relevant knowledge in their chosen fields.</p>
                </div>

            </div>
            <div class="col-md-5">
                <div class="schemeImg">
                    <img src="https://sanskaramuniversity.ac.in/frontend/assets/images/programImg.png" width="70%" height="250px" style=" margin-left: 50px;" class="rounded" alt="scheme">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 order-md-1 order-2">
                <div class="ugcImg mt-5">
                    <img src="web-assets/objective.png" class="rounded" width="70%" height="250px" alt="UGC">
                </div>
            </div>
            <div class="col-md-7 order-md-2 order-1">
                <h2 class="fw-bold mb-4" style="text-transform: uppercase;">Course Objectives</h2>
                <ul class="aligned-list">
                    <li><span class="tick-icon">✔</span>
                        <p class="tick-text">To offer a balanced combination of profession-specific skills and essential general education content.
                    </li>
                    <li><span class="tick-icon">✔</span>
                        <p class="tick-text">To ensure that students acquire the necessary knowledge and practical skills, making them job-ready at every stage of the program.</li>
                    <li><span class="tick-icon">✔</span>
                        <p class="tick-text">To offer students flexibility through clearly defined entry points and multiple exit options.</li>
                    <li><span class="tick-icon">✔</span>
                        <p class="tick-text">To incorporate the National Skill Qualifications Framework (NSQF) within undergraduate education to boost the employability of graduates and address industry needs. Graduates will not only cater to local and national industries but will also be prepared for global workforce opportunities.</li>
                    <li><span class="tick-icon">✔</span>
                        <p class="tick-text">To enable upward mobility for students who have completed vocational education after their 10+2 studies.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bvocIndestries" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 pe-md-3">
                <h2 class="fw-bold mb-4" style="text-transform: uppercase;">Why Bvoc Industry is the need of the Hour?</h2>
                <p style="margin: 0 auto; text-align: justify; width: 100%;">India ranks as the 4th largest country facing a significant skill gap, with a shortage of 56%. As a result, leading companies are increasingly viewing India as a key destination for B.Voc. institutes, as these institutions emphasize the development of a skilled workforce and essential resources tailored to industry needs.</p>
            </div>
            <div class="col-md-7">
                <img src="web-assets/why.avif" alt="about" width="70%" height="230px" style="border: 1px solid gray; margin-left: 60px;">
            </div>
        </div>
    </div>
</section>

<section class="awardSection" id="awards" style="margin-top: 50px; background: #111184;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center text-white" style="margin-top: 50px; margin-bottom: 50px;">
                <h2 class="fw-bold mb-4" style="text-transform: uppercase;">Levels of Awards</h2>
                <p class="mb-5" style="margin: 0 auto; text-align: justify; width: 100%;">The certification levels will lead to Diploma/Advanced Diploma/B. Voc. Degree in one or more vocational areas and will be offered under the aegis of the University.</p>
                <div class="table-responsive">
                    <table class="table table-bordered text-center text-white">
                        <thead class="table-light">
                            <tr>
                                <th>Award</th>
                                <th>Duration</th>
                                <th>Corresponding NSQF Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Diploma</td>
                                <td>1 Year</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Advanced Diploma</td>
                                <td>2 Years</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>B. Voc. Degree</td>
                                <td>3 Years</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td>PG Diploma</td>
                                <td>1 Year</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>M. Voc. Degree</td>
                                <td>2 Years</td>
                                <td>9</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="assesmentSec" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold mb-4" style="text-transform: uppercase;">Assessment / Examination</h2>
                <p style="margin: 0 auto; text-align: justify; width: 100%;">Examinations at Sanskaram University will be held on the university campus and evaluated according to the established university guidelines. However, for the assessment of skill development components, the university may collaborate with the relevant Sector Skill Councils recognized by NSDC to design the examination and assessment framework. Additionally, the university may consider involving designated assessors from Sector Skill Councils or industry associations to carry out the practical evaluations.</p>
            </div>
        </div>
    </div>
</section>

<section class="courseSection" id="course" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold mb-4" style="text-transform: uppercase;">Courses</h2>
                <div class="table-responsive">
                    <table class="table table-bordered text-center course-table">
                        <thead style="background-color: #111184;">
                            <tr style="color:white;">
                                <td>SL.NO.</td>
                                <td>COURSE</td>
                                <td>SEMESTERS</td>
                                <td>ELIGIBILITY</td>
                                <td>STREAM</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>B.VOC IN HOSPITAL MANAGEMENT</td>
                                <td>6</td>
                                <td>XII</td>
                                <td>ANY STREAM</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>B.VOC IN HOSPITAL STERILIZATION TECHNOLOGY</td>
                                <td>6</td>
                                <td>XII</td>
                                <td>ANY STREAM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>B.VOC IN MEDICAL LAB TECHNOLOGY</td>
                                <td>6</td>
                                <td>XII</td>
                                <td>ANY STREAM</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>B.VOC IN RADIOLOGY & MEDICAL IMAGING TECHNOLOGY</td>
                                <td>6</td>
                                <td>XII</td>
                                <td>ANY STREAM</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>B.VOC IN OPTOMETRY TECHNOLOGY</td>
                                <td>6</td>
                                <td>XII</td>
                                <td>ANY STREAM</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>B.VOC IN OPERATION THEATRE TECHNOLOGY</td>
                                <td>6</td>
                                <td>XII</td>
                                <td>ANY STREAM</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>B.VOC IN HOTEL MANAGEMENT</td>
                                <td>6</td>
                                <td>XII</td>
                                <td>ANY STREAM</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>B.VOC IN DIALYSIS TECHNOLOGY</td>
                                <td>6</td>
                                <td>XII</td>
                                <td>ANY STREAM</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>B.VOC IN CARDIC CARE TECHNOLOGY</td>
                                <td>6</td>
                                <td>XII</td>
                                <td>ANY STREAM</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>B.VOC IN PATIENT CARE MANAGEMENT</td>
                                <td>6</td>
                                <td>XII</td>
                                <td>ANY STREAM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="benefitSection" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="benefitCard shadow">
                    <div class="benefitImg">
                        <img src="web-assets/placement.jpg" alt="Benefit" width="100%" height="200px;">
                    </div>
                    <h5 class="mt-2 mb-3" style="margin-left: 20px; margin-right: 20px; padding-top: 20px; padding-bottom:0;" style="text-transform: uppercase;">Placement</h5>
                    <p class="text-justify" style="margin-left: 20px; margin-right: 20px; padding-bottom: 30px; text-align: justify; width: 90%;"><small>The B.Voc. program ensures that students gain strong practical experience through internships and training with industry partners. Many students are directly recruited by the organizations where they intern. In addition, a dedicated placement cell guides and supports students throughout the program to help them successfully transition into full-time employment opportunities after graduation.</small></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="benefitCard shadow">
                    <div class="benefitImg">
                        <img src="web-assets/support.png" alt="Benefit" width="100%" height="200px;">
                    </div>
                    <h5 class="mt-2 mb-3" style="margin-left: 20px; margin-right: 20px; padding-top: 20px;" style="text-transform: uppercase;">Student Support Services</h5>
                    <p class="text-justify" style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px;  display: block; padding-bottom: 30px; text-align: justify; width: 90%;"><small>The B.Voc. program prioritizes practical skill development with continuous support. Each student is assigned a Programme Coordinator who monitors academic and skill progress. Professional trainers and industry experts assist students at every step, ensuring a smooth learning journey without any barriers, and preparing them thoroughly for future professional challenges and career advancement.</small></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="benefitCard shadow">
                    <div class="benefitImg">
                        <img src="web-assets/internship.jpg" alt="Benefit" width="100%" height="200px;">
                    </div>
                    <h5 class="mt-2 mb-3" style="margin-left: 20px; margin-right: 20px; padding-top: 20px;" style="text-transform: uppercase;">Internship</h5>
                    <p class="text-justify" style="margin-left: 20px; margin-right: 20px; padding-bottom: 30px; text-align: justify; width: 90%;"><small>Internships are a vital part of the B.Voc. curriculum, offering students real-world exposure and professional experience. Through practical training, projects, and community-based initiatives, students apply classroom knowledge in supervised work settings. This hands-on approach ensures that students graduate with industry-relevant skills and are well-prepared for employment in their respective fields.</small></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contactSec" id="contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5" style="margin-top: 50px; margin-bottom: 50px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7900130887665!2d76.680048!3d28.4255924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d6936a60dcfd7%3A0xc8c4b0baf0efea89!2sSanskaram%20University!5e0!3m2!1sen!2sin!4v1745826656161!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<?php include('footer-top.php'); ?>
<?php include('footer-bottom.php'); ?>