<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Astra | Discord bot</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta property="og:title" content="Astra &middot; Discord Bot" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/assets/img/favicon.png" />
    <meta property="og:description"
          content="Astra manages your server - you can handle your discord server with Astra: Administration, level system, temp channels, welcome message, and much more." />
    <meta name="theme-color" content="#5846f9">

    <link href="assets/img/favicon_transparent.png" rel="icon">
    <link href="assets/img/favicon_transparent.png" rel="favicon_transparent">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php
include_once './templates/header2.php';
?>

<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Commands</h1>
                <h2>Here is a detailed usage of Astra's Commands.
                </h2>
                <div><a href="invite.php" class="btn-get-started scrollto">Invite</a>
                    <a href="support.php" class="btn-get-started scrollto">Support server</a></div>

            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                <img src="assets/img/Commands_symbol.png" class="img-fluid animated" alt="", height="300", width="300">
            </div>
        </div>
    </div>

</section>

<!-- Notes -->
<div class='notes card'>
    <div class='container full grid'>
        <div class='commandPrefix'>
            <h2>COMMAND PREFIX</h2>
            <div class='flex'>
                <p>The default prefix is </p>
                <pre><code> a! </code></pre>
            </div>
            <div class='flex pop'>
                <p>To find a guilds prefix mention </p>
                <pre><code> @Astra#5516 </code></pre>
            </div>
            <div class='flex'>
                <p>Command Example: </p>
                <pre><code>a!help</code></pre>
            </div>
        </div>
        <div class='commandSyntax'>
            <h2>COMMAND SYNTAX</h2>
            <p><i>(Please do not include these when typing commands)</i></p>

            <div class='flex'>
                <pre><code> [] </code></pre>
                <p>- Optional paramater</p>
            </div>
            <div class='flex'>
                <pre><code> <> </code></pre>
                <p>- Required parameter</p>
            </div>
            <div class='flex pop'>
                <pre><code> < thing1 || thing2 > </code></pre>
                <p>- Select an option inside</p>
            </div>
        </div>
    </div>
</div>

<!-- Commands -->
<div class='category flex'>
    <div class='container full accordion'>
        <div class='card commands'>
            <div id='settingsContainer'>
                <input type='checkbox' id='settings' class='accordion_input'>
                <label for='settings' class='accordion_label'>Settings</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='prefix' class='accordion_input'>
                        <label for='prefix' class='accordion_label'>Prefix</label>
                        <div class='commandcontent'>
                            <p>This can be used to change the prefix.</p>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>prefix < new-prefix ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>prefix ?</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Required Permissions: </h4>
                                <pre><code>Administrator</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='dadJoke' class='accordion_input'>
                        <label for='dadJoke' class='accordion_label'>Joinrole</label>
                        <div class='commandcontent	'>
                            <p>Sets a joinrole for your server.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>joinrole < role-mention ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>joinrole @Astra</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Required Permissions: </h4>
                                <pre><code>Administrator</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='fact' class='accordion_input'>
                        <label for='fact' class='accordion_label'>Voicesetup</label>
                        <div class='commandcontent'>
                            <p>Setup nice Tempchannels for your server.
                            </p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>voicesetup</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Required Permissions: </h4>
                                <pre><code>Administrator</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='rps' class='accordion_input'>
                        <label for='rps' class='accordion_label'>Reactionrole</label>
                        <div class='commandcontent'>
                            <p>Set up a reactionrole.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>reactionrole < role > < message > < emoji ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>reactionrole 902320897124368436 906645231355707412 👍</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>rr, reaction, setreaction</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='levelsystemContainer'>
                <input type='checkbox' id='levelsystem' class='accordion_input'>
                <label for='levelsystem' class='accordion_label'>Levelsystem</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='level' class='accordion_input'>
                        <label for='level' class='accordion_label'>Levelsystem</label>
                        <div class='commandcontent'>
                            <p>Enables/Disables the levelsystem on your server.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>levelsystem < on/off ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>levelsystem off</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Required Permissions: </h4>
                                <pre><code>Administrator</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='rank' class='accordion_input'>
                        <label for='rank' class='accordion_label'>Rank</label>
                        <div class='commandcontent'>
                            <p>This command shows your level and xp.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>rank</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='top' class='accordion_input'>
                        <label for='top' class='accordion_label'>Top</label>
                        <div class='commandcontent'>
                            <p>Get a list from the top 10 people with most XP/level.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>top</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>top, best</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='informationContainer'>
                <input type='checkbox' id='information' class='accordion_input'>
                <label for='information' class='accordion_label'>Information</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='avatar' class='accordion_input'>
                        <label for='avatar' class='accordion_label'>Avatar</label>
                        <div class='commandcontent'>
                            <p>Displays the profile picture of a user.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>avatar < user ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>avatar Astra#5516</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>pb, av</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='poll' class='accordion_input'>
                        <label for='poll' class='accordion_label'>Poll</label>
                        <div class='commandcontent'>
                            <p>Shows your question with reactions on the message.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>poll < question ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>poll Astra is good right?</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>poll, umfrage</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='channelinfo' class='accordion_input'>
                        <label for='channelinfo' class='accordion_label'>Channelinfo</label>
                        <div class='commandcontent'>
                            <p>Displays a lot of information from one channel.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>channelinfo < channel ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>channelinfo #news</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>channelinfo, ci</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='userinfo' class='accordion_input'>
                        <label for='userinfo' class='accordion_label'>Userinfo</label>
                        <div class='commandcontent'>
                            <p>Get infos about a user</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>userinfo < user ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>userinfo Astra#5516</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>userinfo, ui, whois</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='serverinfo' class='accordion_input'>
                        <label for='serverinfo' class='accordion_label'>Serverinfo</label>
                        <div class='commandcontent'>
                            <p>Get infos about the Server</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>serverinfo</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>serverinfo</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>serverinfo, si</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='servericon' class='accordion_input'>
                        <label for='servericon' class='accordion_label'>Servericon</label>
                        <div class='commandcontent'>
                            <p>Displays the profile picture from the server.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>servericon</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>servericon</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>servericon, guildicon</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='roleinfo' class='accordion_input'>
                        <label for='roleinfo' class='accordion_label'>Roleinfo</label>
                        <div class='commandcontent'>
                            <p>Get information about a role. Case Sensitive!</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>roleinfo < role ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>roleinfo 902320897124368436</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>roleinfo, ri</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='weather' class='accordion_input'>
                        <label for='weather' class='accordion_label'>Weather</label>
                        <div class='commandcontent'>
                            <p>Display a weather of a city.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>weather < city ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>weather Berlin</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>wather, wetter</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='permissions' class='accordion_input'>
                        <label for='permissions' class='accordion_label'>Permissions</label>
                        <div class='commandcontent'>
                            <p>Lists all permissions from someone.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>permissions < user ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>permissions Astra#5516</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>permissions, permission, perms</code></pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id='moderationContainer'>
                <input type='checkbox' id='moderation' class='accordion_input'>
                <label for='moderation' class='accordion_label'>Moderation</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='kick' class='accordion_input'>
                        <label for='kick' class='accordion_label'>Kick</label>
                        <div class='commandcontent'>
                            <p>Lets a user kick. If possible.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>kick < user > [ reason ]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>kick Astra#5516 test</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>k</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Required Permissions: </h4>
                                <pre><code>kick_members</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='ban' class='accordion_input'>
                        <label for='ban' class='accordion_label'>Ban</label>
                        <div class='commandcontent'>
                            <p>Bans a user. If possible.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>ban < user > [ reason ]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>ban Astra#5516 test</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>b</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Required Permissions: </h4>
                                <pre><code>ban_members</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='unban' class='accordion_input'>
                        <label for='unban' class='accordion_label'>Unban</label>
                        <div class='commandcontent'>
                            <p>Unbans a user. If possible.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>unban < user#tag ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>unban Astra#5516</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Required Permissions: </h4>
                                <pre><code>ban_members</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='banlist' class='accordion_input'>
                        <label for='banlist' class='accordion_label'>Banlist</label>
                        <div class='commandcontent'>
                            <p>Lists all banned users on this server.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>banlist</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>bans</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Required Permissions: </h4>
                                <pre><code>ban_members</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='softban' class='accordion_input'>
                        <label for='softban' class='accordion_label'>Softban</label>
                        <div class='commandcontent'>
                            <p>Bans a user from the Discord and deletes his messages from the last 7 days. The user is informed about this by DM, if possible.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>softban < user > [ reason ]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>softban Astra#5516 test</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>shortban</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='clear' class='accordion_input'>
                        <label for='clear' class='accordion_label'>Clear</label>
                        <div class='commandcontent'>
                            <p>Deletes a certain number of messages.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>clear < number ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>clear 100</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>purge</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='embedfy' class='accordion_input'>
                        <label for='embedfy' class='accordion_label'>Embedfy</label>
                        <div class='commandcontent'>
                            <p>The bot will display your message in a Embed.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>embedfy < title > [ description ]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>embedfy test test</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='role' class='accordion_input'>
                        <label for='role' class='accordion_label'>Role</label>
                        <div class='commandcontent'>
                            <p>This allows you to add and remove roles from a user.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>role < role > < user || ID ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>role Admin Astra#5516 || 811733599509544962</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='mute' class='accordion_input'>
                        <label for='mute' class='accordion_label'>Mute</label>
                        <div class='commandcontent'>
                            <p>Mutes a user until will be unmuted.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>mute < user/ID > [ reason ]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>mute Astra#5516 test</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Required Permissions: </h4>
                                <pre><code>manage_roles</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='unmute' class='accordion_input'>
                        <label for='unmute' class='accordion_label'>Unmute</label>
                        <div class='commandcontent'>
                            <p>Unmuted a user who is muted.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>unmute < user/ID > [ reason ]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>unmute Astra#5516 test</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Required Permissions: </h4>
                                <pre><code>manage_roles</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='giveawaysContainer'>
                <input type='checkbox' id='giveaways' class='accordion_input'>
                <label for='giveaways' class='accordion_label'>Giveaways</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='yt-channel' class='accordion_input'>
                        <label for='yt-channel' class='accordion_label'>Gstart</label>
                        <div class='commandcontent'>
                            <p>Start a giveaway.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>gstart < time > < winners > < price ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>a!gstart 1h 3 price</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='greroll' class='accordion_input'>
                        <label for='greroll' class='accordion_label'>Greroll</label>
                        <div class='commandcontent'>
                            <p>Reroll a giveaway</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>greroll < messageID ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>greroll 1234567890</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='gend' class='accordion_input'>
                        <label for='gend' class='accordion_label'>Gend</label>
                        <div class='commandcontent'>
                            <p>Ends a giveaway</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>gend < messageID ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>gend 1234567890</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='funContainer'>
                <input type='checkbox' id='fun' class='accordion_input'>
                <label for='fun' class='accordion_label'>Fun</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='8ball' class='accordion_input'>
                        <label for='8ball' class='accordion_label'>8ball</label>
                        <div class='commandcontent'>
                            <p>Ask Astra a question</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>8ball < question ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>8ball Is Astra a good bot?</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='qr' class='accordion_input'>
                        <label for=qr class='accordion_label'>QR</label>
                        <div class='commandcontent'>
                            <p>Create a Qr-code with a url</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>qr < url ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>qr https://astra-bot.de</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>qrcode, qrcreate</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='meme' class='accordion_input'>
                        <label for='meme' class='accordion_label'>Meme</label>
                        <div class='commandcontent'>
                            <p>Watch a funny meme</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>meme</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>meme</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>mem</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='lostrate' class='accordion_input'>
                        <label for='lostrate' class='accordion_label'>Lostrate</label>
                        <div class='commandcontent'>
                            <p>Calculated with a highly complex process like Lost the user is.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>lostrate [use]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>lostrate @Astra#5516</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>mem</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='ascii' class='accordion_input'>
                        <label for='ascii' class='accordion_label'>Ascii</label>
                        <div class='commandcontent'>
                            <p>Displays your message as ascii format.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>ascii < text ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>ascii This is my text</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='activities' class='accordion_input'>
                        <label for='activities' class='accordion_label'>Activities</label>
                        <div class='commandcontent'>
                            <p>Displays all games that are played in the current server.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>games</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>activities</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='reverse' class='accordion_input'>
                        <label for='reverse' class='accordion_label'>Reverse</label>
                        <div class='commandcontent'>
                            <p>Reverse stuff.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>reverse < text ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>reverse This is your sentence</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='password' class='accordion_input'>
                        <label for='password' class='accordion_label'>Password</label>
                        <div class='commandcontent'>
                            <p>Generates a random password for you!</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>password</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='calc' class='accordion_input'>
                        <label for='calc' class='accordion_label'>Calculator</label>
                        <div class='commandcontent'>
                            <p>High performance calculator with buttons</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>calc</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>calculate, calculator</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='picContainer'>
                <input type='checkbox' id='pic' class='accordion_input'>
                <label for='pic' class='accordion_label'>Pictures</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='triggered' class='accordion_input'>
                        <label for='triggered' class='accordion_label'>Triggered</label>
                        <div class='commandcontent'>
                            <p>Sends a picture of your avatar with effects.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>triggered [user/ID]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>triggered @Astra#5516</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='gay' class='accordion_input'>
                        <label for='gay' class='accordion_label'>Gay</label>
                        <div class='commandcontent'>
                            <p>Sends a picture of your avatar with effects.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>gay [user/ID]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>gay @Astra#5516</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='wasted' class='accordion_input'>
                        <label for='wasted' class='accordion_label'>Wasted</label>
                        <div class='commandcontent'>
                            <p>Sends a picture of your avatar with effects.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>wasted [user/ID]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>wasted @Astra#5516</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='wanted' class='accordion_input'>
                        <label for='wanted' class='accordion_label'>Wanted</label>
                        <div class='commandcontent'>
                            <p>Sends a picture of your avatar with effects.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>wanted [user/ID]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>wanted @Astra#5516</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='cat' class='accordion_input'>
                        <label for='cat' class='accordion_label'>Cat</label>
                        <div class='commandcontent'>
                            <p>Random picture of a cat.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>cat</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='color' class='accordion_input'>
                        <label for='color' class='accordion_label'>Color</label>
                        <div class='commandcontent'>
                            <p>Enter a HEX code and the color will appear.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>color < HEX Code ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>color ffff00</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='pix' class='accordion_input'>
                        <label for='pix' class='accordion_label'>Pix</label>
                        <div class='commandcontent'>
                            <p>Pix the avatar of yourself or the pinged user.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>pix [user/ID]</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>pix @Astra#5516</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='economyContainer'>
                <input type='checkbox' id='economy' class='accordion_input'>
                <label for='economy' class='accordion_label'>Economy</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='bal' class='accordion_input'>
                        <label for='bal' class='accordion_label'>Balance</label>
                        <div class='commandcontent'>
                            <p>Opens a account.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>balance</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>bal</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='beg' class='accordion_input'>
                        <label for='beg' class='accordion_label'>Beg</label>
                        <div class='commandcontent'>
                            <p>Begging for coins.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>beg</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='with' class='accordion_input'>
                        <label for='with' class='accordion_label'>Withdraw</label>
                        <div class='commandcontent'>
                            <p>Withdraw money from your bank.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>withdraw < amount/all ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>with, wd</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='dep' class='accordion_input'>
                        <label for='dep' class='accordion_label'>Deposit</label>
                        <div class='commandcontent'>
                            <p>Deposit something to your bank.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>deposit < amount/all ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>dep, dp</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='send' class='accordion_input'>
                        <label for='send' class='accordion_label'>Send</label>
                        <div class='commandcontent'>
                            <p>Deposit something to your bank.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>send < user/ID > < amount/all ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>give</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='rob' class='accordion_input'>
                        <label for='rob' class='accordion_label'>Rob</label>
                        <div class='commandcontent'>
                            <p>Robs a user.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>rob < user/ID ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>give</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='richest' class='accordion_input'>
                        <label for='richest' class='accordion_label'>Richest</label>
                        <div class='commandcontent'>
                            <p>Get a list from the top 10 richest people.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>richest</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases:</h4>
                                <pre><code>rich</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='slot' class='accordion_input'>
                        <label for='slot' class='accordion_label'>Slot</label>
                        <div class='commandcontent'>
                            <p>Test your luck by pulling the lever.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>slot < amount ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>slots</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='rps' class='accordion_input'>
                        <label for='rps' class='accordion_label'>RPS</label>
                        <div class='commandcontent'>
                            <p>Play Rock Paper Scissors. Your reaction is your choice.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>rps < amount ></code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='coinflip' class='accordion_input'>
                        <label for='coinflip' class='accordion_label'>Coinflip</label>
                        <div class='commandcontent'>
                            <p>Lets flip a coin.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>slot < amount ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>slots</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='work' class='accordion_input'>
                        <label for='work' class='accordion_label'>Work</label>
                        <div class='commandcontent'>
                            <p>Go to work with your current job.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>work</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='job' class='accordion_input'>
                        <label for='job' class='accordion_label'>Job</label>
                        <div class='commandcontent'>
                            <p>Get a list of commands for job system.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>job < apply, quit, list ></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='musicContainer'>
                <input type='checkbox' id='music' class='accordion_input'>
                <label for='music' class='accordion_label'>Music</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='join' class='accordion_input'>
                        <label for='join' class='accordion_label'>Join</label>
                        <div class='commandcontent'>
                            <p>Make bot join your voice channel.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>join</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>connect</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='leave' class='accordion_input'>
                        <label for='leave' class='accordion_label'>Leave</label>
                        <div class='commandcontent'>
                            <p>Disconnect the bot from the voice channel.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>leave</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>get-out, disconnect, leave-voice</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='play' class='accordion_input'>
                        <label for='play' class='accordion_label'>Play</label>
                        <div class='commandcontent'>
                            <p>Play a song with given url or title from Youtube.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>play < URL/Title ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Example: </h4>
                                <pre><code>play Never gonna give you up</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>p</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='pause' class='accordion_input'>
                        <label for='pause' class='accordion_label'>Pause</label>
                        <div class='commandcontent'>
                            <p>Pause the currently playing audio.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>pause</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='stop' class='accordion_input'>
                        <label for='stop' class='accordion_label'>Stop</label>
                        <div class='commandcontent'>
                            <p>Stop the current playing songs and clear the queue.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>stop</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='skip' class='accordion_input'>
                        <label for='skip' class='accordion_label'>Skip</label>
                        <div class='commandcontent'>
                            <p>Skip the current playing song.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>skip</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='loop' class='accordion_input'>
                        <label for='loop' class='accordion_label'>Loop</label>
                        <div class='commandcontent'>
                            <p>Repeat the currently playing song or turn off by using the command again.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>loop</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='reset' class='accordion_input'>
                        <label for='reset' class='accordion_label'>Reset</label>
                        <div class='commandcontent'>
                            <p>Restart the currently playing song from the begining.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>play < URL/Title ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>restart</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='queue' class='accordion_input'>
                        <label for='queue' class='accordion_label'>Queue</label>
                        <div class='commandcontent'>
                            <p>Show the current songs in queue.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>queue</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>song-list, q, current-songs</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='volume' class='accordion_input'>
                        <label for='volume' class='accordion_label'>Volume</label>
                        <div class='commandcontent'>
                            <p>Change the volume of the bot.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>volume < volume ></code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>vol</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='nowplaying' class='accordion_input'>
                        <label for='nowplaying' class='accordion_label'>Nowplaying</label>
                        <div class='commandcontent'>
                            <p>Show information about the current playing song.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>nowplaying</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>song, np, current</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='botContainer'>
                <input type='checkbox' id='bot' class='accordion_input'>
                <label for='bot' class='accordion_label'>Bot</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='about' class='accordion_input'>
                        <label for='about' class='accordion_label'>Bot Info</label>
                        <div class='commandcontent'>
                            <p>Shows info about bot.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>about</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases: </h4>
                                <pre><code>info, bot, botinfo</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='vote' class='accordion_input'>
                        <label for='vote' class='accordion_label'>Vote</label>
                        <div class='commandcontent'>
                            <p>Get a list of Websites where you can vote for Astra.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>vote</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='uptime' class='accordion_input'>
                        <label for='uptime' class='accordion_label'>Uptime</label>
                        <div class='commandcontent'>
                            <p>Check the Bot's uptime.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>online</code></pre>
                            </div>
                        </div>
                    </div>

                    <div class='card'>
                        <input type='checkbox' id='privacy' class='accordion_input'>
                        <label for='privacy' class='accordion_label'>Privacy</label>
                        <div class='commandcontent'>
                            <p>Information about the datas we store.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>privacy</code></pre>
                            </div>
                            <div class='flex commandusage'>
                                <h4>Aliases:</h4>
                                <pre><code>data</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='premiumContainer'>
                <input type='checkbox' id='premium' class='accordion_input'>
                <label for='premium' class='accordion_label'>Premium</label>
                <div class='commandcontent accordion'>
                    <div class='card'>
                        <input type='checkbox' id='premium2' class='accordion_input'>
                        <label for='premium2' class='accordion_label'>Premium</label>
                        <div class='commandcontent'>
                            <p>Shows you how to get premium.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>premium</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='usekey' class='accordion_input'>
                        <label for='usekey' class='accordion_label'>Usekey</label>
                        <div class='commandcontent'>
                            <p>Redeem your Premium key.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>usekey < key ></code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='welcome' class='accordion_input'>
                        <label for='welcome' class='accordion_label'>Welcome</label>
                        <div class='commandcontent'>
                            <p>Sets the welcome message and shows the current.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>welcome [update]</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class='card'>
                        <input type='checkbox' id='testjoin' class='accordion_input'>
                        <label for='testjoin' class='accordion_label'>Testjoin</label>
                        <div class='commandcontent'>
                            <p>Sends the welcome message to the channel, to see if it works.</p>
                            <div class='flex commandusage'>
                                <h4>Usage: </h4>
                                <pre><code>testjoin</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <div class="credits">
                        <h3>Astra</h3>
                        <p>
                            Copyright © 2021 Astra Development
                            Astra Development is not affiliated with Discord, Inc.
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 offset-md-4 footer-links" style="/*! float: left */">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#features">Features</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Other Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://stats.uptimerobot.com/lE5N1SoKy5">Servicestatus</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="imprint">Imprint</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="privacy-policy">Privacy Policy</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="botprivacy">Bots Privacy</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="terms">Terms of use</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="copyright-wrap d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    <p style="font-size: 30px">
                        <b>Astra</b>
                    <p style="font-size: 15px">
                        Astra manages your server - you can handle your discord server with Astra
                    </p>
                    </p>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://discord.com/oauth2/authorize?client_id=811733599509544962&permissions=1899359446&scope=bot%20applications.commands" class="discord"><i class="bx bxl-discord"></i></a>
            </div>
        </div>

    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>