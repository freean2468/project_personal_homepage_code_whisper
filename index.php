<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/code_whisper/common/head.php"; ?>
</head>

<body>
    <div id="background">
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/code_whisper/common/header.php"; ?>
        </header>

        <main>
            <div class="common-container">
                <div class="content-top-container">
                    <div>
                        <h1 class="title">
                            Hello, I'm Neil.
                        </h1>
                        <h2 class="sub-title">
                            I'm a developer and survivalist <br/>
                            from Seoul, Korea.
                        </h2>
                    </div>
                </div>

                <div class="content-main-container">
                    <div id="paragraph-android-team">
                        <div class="paragraph-title">
                            <h3 class="sub-title-2">
                                안드로이드 팀 프로젝트
                            </h3>
                            <h2 class="sub-title-3">
                                한 번의 실패, 한 번의 성공.
                            </h2>
                        </div>
                        <div>
                            <span>
                                <a href="https://github.com/freean2468/project_shimpyo" target="_blank">
                                    <img src="./img/p1_first.png" alt="왼쪽 이미지">
                                </a>
                            </span>
                            <span>
                                ->
                            </span>
                            <span>
                                <a href="https://github.com/freean2468/ProjectNext" target="_blank">
                                    <img src="./img/p1_second.png" alt="오른쪽 이미지">
                                </a>
                            </span>
                        </div>
                        <div class="texts">
                            <p>
                                &nbsp;첫 팀 프로젝트에서 팀장으로서 해서는 안 될 행동을 저질렀습니다.
                                다른 팀원들이 따라오지 못하자, 그들을 이끌기 보다는 혼자 어떻게든
                                진행해야겠다는 생각으로 혼자서 프로젝트를 진행했습니다.
                                그 결과 팀원들은 얻어가는 것이 없었고 저 역시 팀 프로젝트를 진행한
                                의미가 많이 퇴색되었습니다.
                                이번 일을 겪고 나서 다음 프로젝트는 제 퍼포먼스를 최소한으로 줄이고
                                다른 팀원들이 많은 것을 얻어갈 수 있도록 프로젝트를 진행했습니다.
                                이를 위해 pair programming을 진행해
                                제 퍼포먼스는 약 1/2로 줄였고
                                다른 팀원들은 첫 번째 프로젝트보다 4~5배의 퍼포먼스 향샹이 있었습니다.
                            </p>
                        </div>
                    </div>

                    <div id="paragraph-android-alone">
                        <div class="paragraph-title">
                            <h3 class="sub-title-2">
                                Amazon Web Service
                            </h3>                            
                            <h2 class="sub-title-3">
                                양날의 검
                            </h2>
                        </div>
                        <div>
                            <span>
                                <a href="https://github.com/freean2468/project_mp3loud" target="_blank">
                                    <img src="./img/p2_first.png" alt="왼쪽 이미지">
                                </a>
                            </span>
                            <span>
                                <a href="https://github.com/freean2468/project_mp3loud" target="_blank">
                                    <img src="./img/p2_second.png" alt="오른쪽 이미지">
                                </a>
                            </span>
                        </div>
                        <div class="texts">
                            <p>
                                &nbsp;세 개의 프로젝트에서 Scalatra 기반 웹서버를 개발했고 이를
                                AWS ECR - AWS EB - AWS RDS 조합으로 서비스를 했습니다. 
                                
                                Free tier 서비스라고 생각하고 의심없이 PostgreSQL을 사용했을 
                                약 3일 후 
                                
                            </p>
                        </div>
                    </div>

                    <div>
                        <h3 class="sub-title-2">
                            Profile
                        </h3>
                        
                        <table>
                            <tr>
                                <th rowspan="3">
                                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/code_whisper/img/profile.png" alt="profile image">
                                </th>
                            </tr>
                            <tr>
                                <td>2014.09 ~ 2019.11</td>
                                <td>해병대사령부 해병통신 중사</td>
                            </tr>
                            <tr>
                                <td>2012.06 ~ 2014.02</td>
                                <td>(주)엑스몬게임즈 Back-end Jr.Programmer</td>
                            </tr>
                            <tr>
                                <td class="no-lr" colspan="3">
                                    <h2>E-mail</h2>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    freean2468@gmail.com
                                </td>
                            </tr>
                            <tr>
                                <td class="no-lr" colspan="3">
                                    <h2>GitHub</h2>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <a href="https://github.com/freean2468" target="_blank">https://github.com/freean2468</a>                    
                                </td>
                            </tr>
                            <tr>
                                <td class="no-lr" colspan="3">
                                    <h2>Experience</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>Language</td>
                                <td colspan="2">Scala, Java, Python, PHP, Javascript, C/C++</td>
                            </tr>
                            <tr>
                                <td>OS Platform</td>
                                <td colspan="2">Windows, MacOS, Android</td>
                            </tr>
                            <tr>
                                <td>Framework</td>
                                <td colspan="2">Scalatra, Node.js, Express.js</td>
                            </tr>
                            <tr>
                                <td>Library</td>
                                <td colspan="2">React, Scala.Slick, Volley</td>
                            </tr>
                            <tr>
                                <td>Database</td>
                                <td colspan="2">MySQL, MongoDB, PostgreSQL</td>
                            </tr>
                            <tr>
                                <td>Networking</td>
                                <td colspan="2">Socket API, HTTP, Ajax</td>
                            </tr>        
                            <tr>
                                <td>Cloud</td>
                                <td colspan="2">AWS EB, AWS ECR, AWS RDS, Heroku</td>
                            </tr>
                            <tr>
                                <td class="no-lr" colspan="3">
                                    <h2>English Skill</h2>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <a href="https://www.instagram.com/sensebecommon/" target="_blank">https://www.instagram.com/sensebecommon/</a>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>