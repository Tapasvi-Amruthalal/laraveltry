@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                margin: 0;
    font-family: Arial, sans-serif;
    background-color: #111; 
    color: #fff; 
}

.container {
    display: flex;
    flex-wrap: wrap;
}

.main-content {
    flex: 1;
    padding: 20px;
    margin-top: 20px;  /* Adjusted margin-top for mobile view */
    background-color: #111;
}

.fixed-section {
    width: 40%;
    height: 100vh;
    position: fixed;
    bottom: 0; /* Changed top to bottom */
    right: 0;
    background-color: #333;
    padding: 20px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}

.rounded-section {
    border-radius: 20px;
}

.album-cover {
    max-width: 100%;
    max-height: 100%;
    border-radius: 10px;
}

    .media-player {
        width: 100%;
        margin-top: 20px;
    }
    
    .player-buttons {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }
    
    .button {
        margin: 0 10px;
        padding: 10px;
        background-color: #3498db;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
    
    .additional-content {
        margin-top: 20px;
    }
    .hopamchuan_chord{
        color:red;
        /* font-size: x-large; */
    }
    
    @media (max-width: 768px) {
        .container {
            flex-direction: column-reverse; /* Adjusted flex-direction */
        }
        
        .fixed-section {
            width: 100%;
            bottom: 0;
            height: auto;
        position: fixed;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        margin-top: 20px; /* Adjusted margin-top */
    }

    .media-player {
        margin-top: 10px;
    }
    .album-cover{
        visibility: hidden;
    }
    .player-buttons {
        margin-top: 5px;
    }
    }
</style>
</head>
<body>

<div class="container">
    <div class="main-content">
    <!-- Your main content goes here -->
    <h1>Main Content</h1>
    <div class="pre  inline" style="height: 669px; font-size: 14px; line-height: 46.2px;">
        <div class="song-lyric-note">
            <div class="chord_lyric_line text_only">Tone D: Capo 2</div>
        </div>
        <div class="chord_lyric_line empty_line">&nbsp;</div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">1. </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> I'm so glad you made time to see me.</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> How's life? Tell me how's
                your family?</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> I haven't seen them in a
            </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> while </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> </span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> You've been good, busier
                than ever,</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> We small talk, work and the
                weather,</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> Your guard is up and I know
            </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> why </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> Because the last time
            </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span
                class="hopamchuan_lyric"> you saw me</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Is still </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> burned in the back of your </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> mind.</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">You gave me </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> roses and I </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> left them there to
            </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> die</span></div>
        <div class="chord_lyric_line empty_line">&nbsp;</div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Chorus: So </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> this is me swallowing my pride</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Standing in </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span
                class="hopamchuan_lyric"> front of you saying "I'm sorry for that </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> night"</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">And I go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> back to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> all the time.</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">It </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> turns out freedom ain't nothing but missing you</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric"> Wishing I'd realized what I
                had when </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> you were mine</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I'd go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> back to December, </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> turn around and make it all
            </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> right</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> back to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> all the time</span></div>
        <div class="chord_lyric_line empty_line">&nbsp;</div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">2. </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> These days I haven't been sleeping,</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> Staying up, playing back
                myself leavin'.</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> When your birthday passed
                and I didn't </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> call </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">And I </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> think about summer, all the beautiful times,</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> I watched you laughing from
                the passenger side.</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> Realized that I loved you in
                the </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> fall </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> And then the cold came,
            </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span
                class="hopamchuan_lyric"> the dark days </span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">When </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> fear crept into my </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> mind</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">You gave me </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> all your love and all I </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> gave you was </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> "Goodbye"</span></div>
        <div class="chord_lyric_line empty_line">&nbsp;</div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Chorus: So </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> this is me swallowing my pride</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Standing in </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span
                class="hopamchuan_lyric"> front of you saying "I'm sorry for that </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> night"</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">And I go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> back to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> all the time.</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">It </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> turns out freedom ain't nothing but missing you</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric"> Wishing I'd realized what I
                had when </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> you were mine</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I'd go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> back to December, </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> turn around and change my
                own </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> mind</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> back to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> all the time</span></div>
        <div class="chord_lyric_line empty_line">&nbsp;</div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">* I miss your </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> tanned skin, your </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> sweet smile, so </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> good to me, so </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> right</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">And how you </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> held me in your </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> arms that September
            </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> night </span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">The first time you </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span
                class="hopamchuan_lyric"> ever saw me </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> cry</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Maybe this is wishful thinking </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> probably mindless dreaming </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">C</span><i>]</i></span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">But if we loved again, I swear I'd love you </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span
                class="hopamchuan_lyric"> right</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I'd go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> back in time and </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> change it but I </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> can't.</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">So if the </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> chain is on your </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> door I unders-</span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> tand.</span></div>
        <div class="chord_lyric_line empty_line">&nbsp;</div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Chorus: But </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> this is me swallowing my pride</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Standing in </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span
                class="hopamchuan_lyric"> front of you saying "I'm sorry for that </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> night"</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">And I go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> back to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> </span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">It </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> turns out freedom ain't nothing but missing you,</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric"> Wishing I'd realized what I
                had when </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> you were mine.</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I'd go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> back to December, </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> turn around and make it all
            </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> right.</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I'd go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> back to December, </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> turn around and change my
            </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span
                class="hopamchuan_lyric"> own mind</span></div>
        <div class="chord_lyric_line empty_line">&nbsp;</div>
        <div class="chord_lyric_line"><span class="hopamchuan_lyric">* I go </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> back to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> all the time.</span></div>
        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span
                class="hopamchuan_lyric"> </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> All the </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span
                class="hopamchuan_lyric"> time </span><span class="hopamchuan_chord_inline"><i>[</i><span
                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> </span><span
                class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span></div>
        </div>
    </div>
    <div class="fixed-section rounded-section">
    <!-- Album Cover -->
    <img class="album-cover" src="path/to/your/album-cover.jpg" alt="Album Cover">

    <!-- Media Player (Simplified for Mobile) -->
    <audio class="media-player" controls>
        <source src="path/to/your/audio.mp3" type="audio/mp3">
        Your browser does not support the audio tag.
    </audio>

    <!-- Play Button (Simplified for Mobile) -->
    <div class="player-buttons">
        <button class="button">Play</button>
    </div>
    </div>
</div>

</body>
</html>
@endsection('content')