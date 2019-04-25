<li class="nav-item {{ Request::is('devices*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('devices.index') !!}"><i class="nav-icon fa fa-tablet"></i><span>Devices</span></a>
</li>
<li class="nav-item {{ Request::is('chipSets*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('chipSets.index') !!}"><i class="nav-icon fa fa-microchip"></i><span>ChipSets</span></a>
</li>
<li class="nav-item {{ Request::is('bodyColors*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('bodyColors.index') !!}"><i class="nav-icon fa fa-paint-brush"></i><span>Body Colors</span></a>
</li>
<li class="nav-item {{ Request::is('nFCS*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('nFCS.index') !!}"><i class="nav-icon fa fa-feed"></i><span>NFCS</span></a>
</li>
<li class="nav-item {{ Request::is('displayProtections*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('displayProtections.index') !!}"><i class="nav-icon fa fa-superpowers"></i><span>Display Protections</span></a>
</li>
<li class="nav-item {{ Request::is('featureMessages*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('featureMessages.index') !!}"><i class="nav-icon fa fa-commenting"></i><span>Feature Messages</span></a>
</li>
<li class="nav-item {{ Request::is('mainCameras*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('mainCameras.index') !!}"><i class="nav-icon fa fa-camera"></i><span>Main Cameras</span></a>
</li>
<li class="nav-item {{ Request::is('oSS*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('oSS.index') !!}"><i class="nav-icon fa fa-android"></i><span>OS</span></a>
</li>
<li class="nav-item {{ Request::is('uIS*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('uIS.index') !!}"><i class="nav-icon fa fa-tablet"></i><span>UI</span></a>
</li>
<li class="nav-item {{ Request::is('weights*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('weights.index') !!}"><i class="nav-icon fa fa-balance-scale"></i><span>Weights</span></a>
</li>
<li class="nav-item {{ Request::is('sims*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('sims.index') !!}"><i class="nav-icon fa fa-phone"></i><span>Sims</span></a>
</li>
<li class="nav-item {{ Request::is('extraFeatures*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('extraFeatures.index') !!}"><i class="nav-icon fa fa-database"></i><span>Extra Features</span></a>
</li>
<li class="nav-item {{ Request::is('mainMemories*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('mainMemories.index') !!}"><i class="nav-icon fa fa-database"></i><span>Main Memories</span></a>
</li>
<li class="nav-item {{ Request::is('dimensions*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('dimensions.index') !!}"><i class="nav-icon fa fa-crop"></i><span>Dimensions</span></a>
</li>
<li class="nav-item {{ Request::is('radios*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('radios.index') !!}"><i class="nav-icon fa fa-music"></i><span>Radios</span></a>
</li>
<li class="nav-item {{ Request::is('gPSS*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('gPSS.index') !!}"><i class="nav-icon icon-compass"></i><span>GPSS</span></a>
</li>
<li class="nav-item {{ Request::is('uSBS*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('uSBS.index') !!}"><i class="nav-icon fa fa-usb"></i><span>USBS</span></a>
</li>
<li class="nav-item {{ Request::is('data*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('data.index') !!}"><i class="nav-icon fa fa-signal"></i><span>Data</span></a>
</li>
<li class="nav-item {{ Request::is('infrareds*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('infrareds.index') !!}"><i class="nav-icon fa fa-random"></i><span>Infrareds</span></a>
</li>
<li class="nav-item {{ Request::is('cameraFeatures*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('cameraFeatures.index') !!}"><i class="nav-icon fa fa-camera-retro"></i><span>Camera Features</span></a>
</li>
<li class="nav-item {{ Request::is('frequencies*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('frequencies.index') !!}"><i class="nav-icon fa fa-flash"></i><span>Frequencies</span></a>
</li>
<li class="nav-item {{ Request::is('secondaryCameras*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('secondaryCameras.index') !!}"><i class="nav-icon fa fa-camera-retro"></i><span>Secondary Cameras</span></a>
</li>
<li class="nav-item {{ Request::is('featureSensors*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('featureSensors.index') !!}"><i class="nav-icon fa fa-adjust"></i><span>Feature Sensors</span></a>
</li>
<li class="nav-item {{ Request::is('torches*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('torches.index') !!}"><i class="nav-icon fa fa-lightbulb-o"></i><span>Torches</span></a>
</li>
<li class="nav-item {{ Request::is('featureAudios*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('featureAudios.index') !!}"><i class="nav-icon fa fa-music"></i><span>Feature Audios</span></a>
</li>
<li class="nav-item {{ Request::is('cPUS*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('cPUS.index') !!}"><i class="nav-icon fa fa-microchip"></i><span>CPUS</span></a>
</li>
<li class="nav-item {{ Request::is('builtInMemories*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('builtInMemories.index') !!}"><i class="nav-icon fa fa-cloud-download"></i><span>BuiltIn Memories</span></a>
</li>
<li class="nav-item {{ Request::is('brands*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('brands.index') !!}"><i class="nav-icon fa fa-amazon"></i><span>Brands</span></a>
</li>
<li class="nav-item {{ Request::is('batteries*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('batteries.index') !!}"><i class="nav-icon fa fa-battery"></i><span>Batteries</span></a>
</li>
<li class="nav-item {{ Request::is('displayTechnologies*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('displayTechnologies.index') !!}"><i class="nav-icon fa fa-facebook"></i><span>Display Technologies</span></a>
</li>
<li class="nav-item {{ Request::is('games*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('games.index') !!}"><i class="nav-icon icon-game-controller"></i><span>Games</span></a>
</li>
<li class="nav-item {{ Request::is('browsers*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('browsers.index') !!}"><i class="nav-icon fa fa-edge"></i><span>Browsers</span></a>
</li>
<li class="nav-item {{ Request::is('screenResolutions*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('screenResolutions.index') !!}"><i class="nav-icon icon-screen-smartphone"></i><span>Screen Resolutions</span></a>
</li>
<li class="nav-item {{ Request::is('screenSizes*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('screenSizes.index') !!}"><i class="nav-icon icon-crop"></i><span>Screen Sizes</span></a>
</li>
<li class="nav-item {{ Request::is('wlans*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('wlans.index') !!}"><i class="nav-icon fa fa-wifi"></i><span>Wlans</span></a>
</li>
<li class="nav-item {{ Request::is('bluetooths*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('bluetooths.index') !!}"><i class="nav-icon fa fa-bluetooth-b"></i><span>Bluetooths</span></a>
</li>
<li class="nav-item {{ Request::is('twoGs*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('twoGs.index') !!}"><i class="nav-icon icon-cursor"></i><span>2G Modules</span></a>
</li>
<li class="nav-item {{ Request::is('threegs*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('threegs.index') !!}"><i class="nav-icon icon-cursor"></i><span>3G 2G Modules</span></a>
</li>
<li class="nav-item {{ Request::is('fourGs*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('fourGs.index') !!}"><i class="nav-icon icon-cursor"></i><span>4G 2G Modules</span></a>
</li>
<li class="nav-item {{ Request::is('displayExtraFeatures*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('displayExtraFeatures.index') !!}"><i class="nav-icon icon-cursor"></i><span>DisplayExtraFeatures</span></a>
</li>
<li class="nav-item {{ Request::is('sDS*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('sDS.index') !!}"><i class="nav-icon icon-cursor"></i><span>SDS</span></a>
</li>
