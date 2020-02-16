<?php
/*
| -------------------------------------------------------------------------------
| Author            : Mathin Mochammad
| Template Name     : Muvimag V2
| -------------------------------------------------------------------------------
*/
$owl = true;
include('header.php');?>
<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="single">
                <div id="player" onclick="thevid=document.getElementById('thevideo');document.getElementById('iframe').src = 
document.getElementById('iframe').src.replace('autoplay=0','autoplay=1');">
                        <header class="entry-header">
                                <h3 class="entry-title ellip"><span itemprop="name"><?php echo $title;?></span></h3>
                        </header>
                        <div class="player-container">
                                <img class="impl img-responsive" src="<?php echo $images;?>" width="1280" height="720" alt="<?php echo $title;?>">
                                <span class="mpaa">HD</span>
                                <div class="inline play-button registration">
                                        <span class="player-loader" style="display: none;"></span>
                                        <i class="fa fa-youtube-play" style="visibility: visible;"></i>
                                </div>
                        </div>
                        <div id="controls">
                                <div class="controls-wraper">
                                        <div class="cplay"><a class="play inline cboxElement"><i class="fa fa-play"></i></a></div>
                                        <div class="cvolu"><div class="volume"><i class="fa fa-volume-up"></i></div>
                                        <div id="ivol" class="ui-slider-horizontal" aria-disabled="false"><div class="ui-widget-header"></div><a class="ui-slider-handle" href="#" style="left: 34.3434343434343%;"></a></div></div>
                                        <div class="duration"><span class="dmax">00:00:00</span> / <span class="dmax"><?php echo convertToHoursMins($runtime);?></span></div>
                                        <div class="progress"><span class=""><span class="progressbar"></span></span></div>
                                        <div class="fullscreen"><i class="fa fa-arrows-alt"></i></div>
                                        <div class="quality"><i class="fa fa-cog"></i><span class="hd">HD</span></div>
                                </div>
                        </div>
                </div>
                <div class="row" style="margin-top:25px;" width="50%">
                        <center><div class="available-formats-img-mobile"><img src="<?php echo site_theme() ?>/images/shadow.png" class="img-4khd"> </div></center>
                </div>
                <div class="row hidden-xs" style="margin-top:25px;">
                    <div class="text-center" ><div class="btn-group btn-group-lg" style="padding: 15px;"><button class="btn btn-success btn-responsive" data-toggle="modal" data-target="#modal-login" data-backdrop="static"><span class="glyphicon glyphicon-play"></span> Watch Now</button><button class="btn btn-success btn-responsive" data-toggle="modal" data-target="#modal-login" data-backdrop="static"><span class="glyphicon glyphicon-save"></span> Download</button></div></div>

                </div>
                <div class="row visible-xs" style="margin-top:25px;">
                    <center>
                        <tr>
                            <td class="text-center"><div class="btn btn-success btn-lg btn-responsive" data-toggle="modal" data-target="#modal-login"> <i class="fa fa-cloud-download"></i> Download</div> <a class="btn btn-danger btn-lg btn-responsive" href="<?php echo site_url() ?>/?action=register"><i class="fa fa-youtube-play"></i> Watch Now </a></td>
                        </tr>
                    </center>
                </div>
                <div class="row visible-xs">
                    <div class="text-center">
                        <br>
                        <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#trailer" data-backdrop="static"><i class="fa fa-youtube"></i> Watch Trailer</a>
                    </div>
                </div>
                <div class="hidden" id="thevideo"><iframe class="embed-responsive-item" id="iframe" src="//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showsuccess=1&amp;controls=0" onload="this.scrolling='no';this.allowfullscreen='true';" style="overflow:hidden;border:0;" scrolling="no"></iframe></div>
        </div><!-- .col-md-12 -->
</div><!-- .single -->

<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-body">

                <?php if( options('468x60') ):?>
                        <div class="iklan" align="center" style="margin-bottom: 15px;"><?php echo options('468x60');?></div>
                <?php endif;?>
                    <div class="poster-wrap hidden-xs hidden-sm">
                            <img itemprop="image" class="impo poster_path img-responsive" src="<?php echo $images_small;?>" width="150" height="225" alt="<?php echo $title;?>">
                            <div class="rating-star" title="<?php echo $get_rating;?> out of 10 stars" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"><?php for($k=1;$k<=$get_rating;$k++){?><i class="fa fa-star"></i><?php }?><?php for($i=$emp_rating;$i>=1;$i--){?><i class="fa fa-star-o"></i><?php $k++; } ?><div class="movie-rating"><span itemprop="ratingValue"><?php echo $get_rating;?></span>/<span itemprop="bestRating">10</span> by <span itemprop="ratingCount"><?php echo $vote_count;?></span> users</div>
                            </div>
                            <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#trailer" data-backdrop="static"><i class="fa fa-youtube"></i> Watch Trailer</a>
                    </div>
                <table class="movie-detail"><tbody>
                        <tr><td colspan="3" class="storyline"><p itemprop="description"><?php echo $description;?></p></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-calendar"></i>Release Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $release_date;?>"><?php echo date('M d, Y', strtotime($release_date));?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-clock-o"></i>Runtime</td><td>:</td><td><time itemprop="duration" datetime="PT<?php echo $runtime;?>M"><?php echo $runtime;?> minutes</time></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-folder-open"></i>Genres</td><td>:</td><td><?php echo $genre;?></td></tr>
                        <tr class="hidden-xs"><td class="tdtitle"><i class="fa fa-suitcase"></i>Production Company</td><td>:</td><td><?php echo $companies;?></td></tr>
                        <tr class="hidden-xs"><td class="tdtitle"><i class="fa fa-globe"></i>Production Countries</td><td>:</td><td><?php echo $country;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-users"></i>Casts</td><td>:</td><td><?php echo $cast;?></td></tr>
                         <tr <?php echo $keywords == '' ? 'hidden' : '' ?>><td class="tdtitle"><i class="fa fa-tags"></i>Plot Keywords</td><td>:</td><td><?php echo $keywords;?></td></tr>
                </tbody></table>

                <div class="clearfix"></div>
        </div>
        <?php 
        if (is_array($row['similar_movies'][results]) && count($row['similar_movies'][results])>0) {
        ?>
            <div class="panel panel-body">
                <h3 class="heading"><i class="fa fa-film"></i> Related Movies <span class="hidden-xs">for "<?php echo $title;?> (<?php echo $year;?>)"</span></h3>
                <div class="clearfix"></div>
                    <div class="row">
                        <div id="owl-similar" class="owl-carousel">
                            <?php
                            foreach((array) array_slice($row['similar_movies'][results], 0, 18) as $similar) :
                            if ($similar[poster_path]) {
                                $backdrop_path = 'http://image.tmdb.org/t/p/w300'.$similar[poster_path];
                            }else{
                                $backdrop_path = site_theme().'/images/no-cover.png';
                            }
                            ?>
                            <div class="item">
                            <a href="<?php echo seo_movie($similar['id'],$similar['title']);?>" title="<?php echo $similar['title'];?>" rel="bookmark" itemprop="url">
                            <img class="lazyOwl img-responsive similar_poster" data-src="<?php echo $backdrop_path;?>" alt="<?php echo $similar['title'];?>" title="<?php echo $similar['title'];?>">
                            </a>
                            </div>
                            <?php 
                                endforeach;
                            ?>
                        </div>
                    </div>
                </div>

            <?php 
        }
        ?>
        </div>

<?php include('footer.php'); ?>

<!-- Trailer -->
<div id="trailer" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Watch Trailer <?php echo $title;?></h4></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showsuccess=1&amp;controls=0" onload="this.scrolling='no';this.allowfullscreen='true';" style="overflow:hidden;border:0;" scrolling="no"></iframe></div></div></div></div></div>


<div class="modal animated bounceIn" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-success"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH <?php echo $title ?></h4> </div><div class="modal-body clearfix"> <div class="row"> <div class="col-md-6" id="login"> <img class="img-responsive" src="<?php echo $w780; ?>"> <hr> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-success" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="submov" class="btn btn-success" value="Log me in"> </div><div class="col-md-6"> <ul class="list-group"> <li class="list-group-item"> <h4 class="list-group-item-heading">High Quality Movies</h4> <p class="list-group-item-text">All of the Movies are available in the superior HD Quality or even higher!</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch Without Limits</h4> <p class="list-group-item-text">You will get access to all of your favourite the Movies without any limits.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">100% Free Advertising</h4> <p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch anytime, anywhere</h4> <p class="list-group-item-text">It works on your TV, PC, or MAC!</p></li></ul> </div></div></div><div class="modal-footer bg-success"> <a class="btn btn-danger" href="/?action=register">Sign Up For Free</a> </div></div></div></div>