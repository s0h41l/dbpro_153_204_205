<li class="nav-item {{ Request::is('chipSets*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('chipSets.index') !!}"><i class="nav-icon icon-cursor"></i><span>ChipSets</span></a>
</li>
<li class="nav-item {{ Request::is('bodyColors*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('bodyColors.index') !!}"><i class="nav-icon icon-cursor"></i><span>BodyColors</span></a>
</li>
<li class="nav-item {{ Request::is('nFCS*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('nFCS.index') !!}"><i class="nav-icon icon-cursor"></i><span>NFCS</span></a>
</li>
<li class="nav-item {{ Request::is('displayProtections*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('displayProtections.index') !!}"><i class="nav-icon icon-cursor"></i><span>DisplayProtections</span></a>
</li>
<li class="nav-item {{ Request::is('featureMessages*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('featureMessages.index') !!}"><i class="nav-icon icon-cursor"></i><span>FeatureMessages</span></a>
</li>
<li class="nav-item {{ Request::is('mainCameras*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('mainCameras.index') !!}"><i class="nav-icon icon-cursor"></i><span>MainCameras</span></a>
</li>
<li class="nav-item {{ Request::is('oSS*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('oSS.index') !!}"><i class="nav-icon icon-cursor"></i><span>OSS</span></a>
</li>
<li class="nav-item {{ Request::is('uIS*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('uIS.index') !!}"><i class="nav-icon icon-cursor"></i><span>UIS</span></a>
</li>
