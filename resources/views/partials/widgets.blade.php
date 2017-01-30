<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="widget widget-list">
        <div class="panel panel-default">
            <div class="panel-heading bold">Server Information</div>
            <div class="panel-body">
                <ul>
                    <li>
                        <a href="steam://connect/119.252.189.38:17001" class="thumb"><i class="fa fa-2x fa-steam"></i></a>
                        <div class="widget-list-meta">
                            <p>
                                <a href="steam://connect/119.252.189.38:17001" class="btn btn-block btn-social btn-github"><i class="fa fa-steam fa-2x"></i> Click here to join</a>
                            </p>
                            <br>
                            <p>
                            <div class="input-group">
                                <input id="input-ip" type="text" class="form-control" value="join.ausexile.com:17001">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-info btn-lg btn-icon-right" id="ip-copy" data-clipboard-target="#input-ip"><i class="fa fa-files-o"></i></button>
                                </div>
                            </div>
                            <br>
                            If The above does not work, locate us on the server list:
                            <br><strong>[AU/NZ] AusExile PVP - (2xG,XP) Fresh Wipe</strong>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="widget">
        <div class="panel panel-default">
            <div class="panel-heading bold">Discord</div>
            <div class="panel-body">
                <p>
                    <a href="https://discord.gg/GnVCR9y" target="_blank"><img src="{{ asset('/assets/img/discord_logo.png') }}" height="auto" width="280px"></a>
                </p>
                <p>
                    Click the link to join: <a href="https://discord.gg/GnVCR9y" target="_blank">discord.gg/GnVCR9y</a>
                </p>
            </div>
        </div>
    </div>
    <div class="widget">
        <div class="panel panel-default">
            <div class="panel-heading bold">Buy the game: Conan Exiles</div>
            <div class="panel-body">
                <p>
                    <a href="https://www.conanexiles.com/" target="_blank"><img src="{{ asset('/assets/img/conan_exiles_logo.png') }}" height="auto" width="280px"></a>
                    Don't have the game, <a href="https://www.conanexiles.com/" target="_blank">click here</a> to visit the website!
                </p>
            </div>
        </div>
    </div>
</div>
@section('widget_scripts')
    <script src="{{ asset('/js/clipboard.min.js') }}"></script>
    <script>
        $('#ip-copy').tooltip({
            trigger: 'click',
            placement: 'bottom'
        });

        function setTooltip(btn, message) {
            $(btn).tooltip('hide')
                .attr('data-original-title', message)
                .tooltip('show');
        }

        function hideTooltip(btn) {
            setTimeout(function() {
                $(btn).tooltip('hide');
            }, 1000);
        }

        var clipboard = new Clipboard('#ip-copy');

        clipboard.on('success', function(e) {
            setTooltip(e.trigger, 'Copied!');
            hideTooltip(e.trigger);
        });

        clipboard.on('error', function(e) {
            setTooltip(e.trigger, 'Failed!');
            hideTooltip(e.trigger);
        });
    </script>
@endsection
