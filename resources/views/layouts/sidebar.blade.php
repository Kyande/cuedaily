<div id="mostViewed">
    <h4><b>Latest Posts</b></h4>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil perferendis voluptates, dolorum molestiae alias repellendus voluptate eligendi, accusantium consequuntur ratione, nobis explicabo earum. Molestiae iusto doloribus voluptatem, quidem magnam ea!.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil perferendis voluptates, dolorum molestiae alias repellendus voluptate eligendi, accusantium consequuntur ratione, nobis explicabo earum. Molestiae iusto doloribus voluptatem, quidem magnam ea!.Lorem ipsum dolo
    </p>
</div>
<div>
    <h4><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>&nbsp <b>Tags</b></h4>
    @forelse($tags as $tag)
        <span class="tags"><a class="TagLink" href="#">{{$tag->name}}</a></span>
    @empty
        <div style="width: 50%;" class="alert alert-danger">
            No tags available
        </div>
    @endforelse
</div>
<div>
    <h4><b>Archives</b></h4>
    <ol class="list-unstyled">
        <li><a href="#">March 2014</a></li>
        <li><a href="#">February 2014</a></li>
        <li><a href="#">January 2014</a></li>
        <li><a href="#">December 2013</a></li>
        <li><a href="#">November 2013</a></li>
        <li><a href="#">October 2013</a></li>
        <li><a href="#">September 2013</a></li>
        <li><a href="#">August 2013</a></li>
        <li><a href="#">July 2013</a></li>
        <li><a href="#">June 2013</a></li>
        <li><a href="#">May 2013</a></li>
        <li><a href="#">April 2013</a></li>
    </ol>
</div>
<div id="footNote" class="sidebar-module">
    <h4><b>Elsewhere</b></h4>
    <ol class="list-unstyled">
        <li><a href="#" class="fa fa-github">&nbsp GitHub</a></li>
        <li><a href="#" class="fa fa-twitter">&nbsp Twitter</a></li>
        <li><a href="#" class="fa fa-facebook">&nbsp Facebook</a></li>
    </ol>
    <div id="copyright">
        <p>
            &copy <?php echo date("Y"); ?> &nbsp Cuedaily
        </p>
    </div>
</div>