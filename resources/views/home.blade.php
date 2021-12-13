@extends('layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container">
            <div id="containerbackground">
                <div class="post_home_container">
                    <div class="leftdivide">
                        <table id="main" style="text-align: center; align-content: center; margin: auto; ">
                            <tr>
                                <td>
                                    <img class="first_img" src="img/logos/logo-fid-llave.png">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h1 class="first_key">FID</h1>
                                </td>
                            </tr>
                        </table>

                        <table id="notmain" style="text-align: center; align-content: center; margin: auto;">
                            <tr>
                                <td>
                                    <img class="first_img" src="img/logos/logo-fid-llave.png">
                                </td>
                                <td>
                                    <h1 class="first_key">FID</h1>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="rightdivide">
                        <p id="infomaintext">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <img src="" style="width: 100%;">
            </div>
        </div>
        <div class="home_container" id="whitebg">
            <div id='departments_cont'>
                <div class="leftdivide" id="dep_info_cnt">
                    <h2>Departments</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="rightdivide" id="btns_cnt_dept">
                    
                    <a class="subtext" ><div class="depbuttons"><i class="fas fa-book" style="font-size: 1.6rem; color:white;"></i></div><h2 class="marger">Library</h2></a><br>
                    
                    <a class="subtext blobb"><div class="depbuttons"><i class="fas fa-search" style="font-size: 1.6rem; color:white;"></i></div><h2 class="marger">Investigation</h2></a><br>

                    <a class="subtext blobb"><div class="depbuttons"><i class="fas fa-pen-nib" style="font-size: 1.6rem; color:white;"></i></div><h2 class="marger">Editorial</h2></a><br>
                </div>
                <!-- Parte Responsiva -->
            </div>
            
        </div>
    </div>
    <div id="missionvision">
        <img src="/img/home/logo-overlay2.png" class="backg-ovrl2 bigscreen ol2-l">
        <img src="/img/home/logo-overlay2r.png" class="backg-ovrl2 bigscreen ol2-r">
        <img src="/img/logos/vector-logo.svg" class="backg-ovrl2 smallscreen">
        <div id="containermv">
            <div class="mv_cont" id="mission">
                <h2>Mission</h2>
                <p>The FID is a unit conceived for the management and dissemination of knowledge through the different processes and activities that it develops, in order to guarantee, in an agile and timely manner, the flow of information that is required for the fulfillment and development of the Company goals; satisfy the training needs in the different areas of performance of the organization, and contribute to the promotion of culture through the publication of books in our areas of competence: genealogy, history and law.</p>
            </div>
            <div class="mv_cont" id="vision">
                <h2>Vision</h2>
                <p>Achieve excellence in the provision of information, research, training and editorial services, in order to efficiently support the internal work carried out by the organization, and develop and propose marketable products that allow expanding the company's business portfolio.</p>
            </div>
        </div>
    </div>
    <div id="container_members">
        <div class="member_menu" id="index_members">
            <div style="width: 80%; margin: 0 auto; height: 20rem;">
                <center>
                    <div class="separator50">

                        <div class="icons_members_index" id="open_formation">
                            <span class="members_index_icons fa-stack fa-2x">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                            </span>
                            <p class="members_index_font">Formation</p>
                        </div>
                        <div  class="icons_members_index" id="open_investigation">
                            <span class="members_index_icons fa-stack fa-2x">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-search fa-stack-1x fa-inverse"></i>
                            </span>
                            <p class="members_index_font">Investigation</p>
                        </div>
                    </div>
                    <div class="separator50">
                        <div class="icons_members_index" id="open_documentation">
                            <span class="members_index_icons fa-stack fa-2x">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-book fa-stack-1x fa-inverse"></i>
                            </span>
                            <p class="members_index_font">Documentation</p>
                        </div>
                        <div class="icons_members_index" id="open_diffusion">
                            <span class="members_index_icons fa-stack fa-2x">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-bullhorn fa-stack-1x fa-inverse"></i>
                            </span>
                            <p class="members_index_font">Diffusion</p>
                        </div>
                    </div>
                </center>
            </div>
        </div>

        <div class="member_menu member_menu_open" id="f_members" style="display: none;">
            <span class="returnback fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-times fa-stack-1x fa-inverse"></i>
            </span>
        </div>

        <div class="member_menu member_menu_open" id="i_members" style="display: none;">
            <span class="returnback fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-times fa-stack-1x fa-inverse"></i>
            </span>
        </div>

        <div class="member_menu member_menu_open" id="d1_members" style="display: none;">
            <span class="returnback fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-times fa-stack-1x fa-inverse"></i>
            </span>
        </div>

        <div class="member_menu member_menu_open" id="d2_members" style="display: none;">
            <span class="returnback fa-stack fa-1x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-times fa-stack-1x fa-inverse"></i>
            </span>
        </div>
    </div>

@endsection