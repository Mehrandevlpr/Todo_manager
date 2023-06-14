<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?= basetemplateUrl('home/assets/css/style.css') ?>">
    <link rel="icon" sizes="192x192" type="image/x-icon" href="<?= baseUrl('favicon.ico') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <div id="dashboard-container">
            <div class="leftside-menu">
                <div class="avatar">
                <div class="icon"><p>3D</p></div>
                <p>3ik Devlopr</p>
                </div>
                <nav class="menu">
                <li class="active">home</li>
                <li>music</li>
                <li>reminders</li>
                <li>contacts</li>
                <li>skills</li>
                <li>settings</li>
                </nav>
            </div>
            <div class="main-grid">
                <div class="item one">
                <h1 id="time" class="time"></h1>
                <h1 id="greeting"></h1>
                <p>3ik</p>
                </div>
                <div class="item two">
                <div class="music"><p>now playing</p></div>
                <div class="info">
                    <div class="progress-bar">
                    <div class="time--current">1:25</div>
                    <div class="time--total">-3:25</div>
                    <div class="fill"></div>
                    </div>
                    <div class="currently-playing">
                    <h2 class="song-name">Paris in the Rain</h2>
                    <h3 class="artist-name">Lauv</h3>
                    </div>
                    <div class="controls">
                    <div class="option"><i class="fas fa-bars"></i></div>
                    <div class="volume"><i class="fas fa-volume-up"></i></div>
                    <div class="previous"><i class="fas fa-backward"></i></div>
                    <div class="play"><i class="fas fa-play"></i></div>
                    <div class="next"><i class="fas fa-forward"></i></div>
                    <div class="shuffle"><i class="fas fa-random"></i></div>
                    <div class="add"><i class="fas fa-plus"></i></div>
                    </div>
                </div>
                </div>
                <div class="item three">
                <h2><i class="fas fa-cloud-sun"></i> 57&#176;</h2>
                <div class="weather">
                    <p>cloudy skies</p>
                    <p class="city">Seattle, WA</p>
                </div>
                </div>
                <div class="item four">
                <h1 id="date"></h1>
                <p><a>no events today</a></p>
                </div>
                
                <div class="item five">
                <div class="rooms--top">
                    <p>lights</p>
                </div>
                <div class="rooms">
                    <div class="rooms--btns">
                    <label class="toggle">
                        <input class="toggle-checkbox" type="checkbox" checked>
                        <div class="toggle-switch"></div>
                        <span class="toggle-label">Bedroom</span>
                    </label>
                    <label class="toggle">
                        <input class="toggle-checkbox" type="checkbox">
                        <div class="toggle-switch"></div>
                        <span class="toggle-label">Bathroom</span>
                    </label>
                    <label class="toggle">
                        <input class="toggle-checkbox" type="checkbox" checked>
                        <div class="toggle-switch"></div>
                        <span class="toggle-label">Lunch</span>
                    </label>
                    <label class="toggle">
                        <input class="toggle-checkbox" type="checkbox">
                        <div class="toggle-switch"></div>
                        <span class="toggle-label">Exercise</span>
                    </label>
                    <label class="toggle">
                        <input class="toggle-checkbox" type="checkbox">
                        <div class="toggle-switch"></div>
                        <span class="toggle-label">Study</span>
                    </label>
                    </div>
                </div>
                </div>
                <div class="item six">
                <div class="reminders">
                    <p>reminders</p>
                    <div class="reminder--btns">
                    <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
                <div class="reminders--list">
                    <label class="todo">
                    <input class="todo-checkbox" type="checkbox" checked>
                    <div class="todo-switch"></div>
                    <span class="todo-label">pay bills</span>
                    </label>
                    <label class="todo">
                    <input class="todo-checkbox" type="checkbox">
                    <div class="todo-switch"></div>
                    <span class="todo-label">go for shopping</span>
                    </label>        
                    
                </div>
                </div>
            </div>
    </div>

    <footer>
    <p>made by 3ikDeveloper ♡</p>
    </footer>
<script src="<?= basetemplateUrl('home/assets/js/javascript.js') ?>"></script>
</body>
</html>