@extends('layouts.template')
@section('content')
<link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/asrange/asRange.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/examples/css/uikit/icon.css">
  <!-- Fonts -->
  
  <link rel="stylesheet" href="{{URL::to('/')}}/global/fonts/octicons/octicons.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  
<div class="page-header">
  <h1 class="page-title font_lato">Octicons</h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/icons')}}">Icons</a></li>
		<li class="active">Octicons</li>
	</ol>
  </div>
</div> 
<div class="page-content container-fluid">
      <div class="row padding-vertical-30">
        <div class="col-sm-12 text-center">
          <h2>Search from Octicons.</h2>
          <form role="search">
            <div class="input-search">
              <input type="text" class="form-control round" placeholder="Search icon...">
              <button type="submit" class="input-search-btn">
                <i class="icon wb-search" aria-hidden="true"></i>
              </button>
            </div>
          </form>
          <div class="margin-bottom-25">
            <div class="asRange" id="icon_change" data-plugin="asRange" data-namespace="rangeUi"
            data-step="1" data-min="16" data-max="64" data-value="24"></div>
            <span id="icon_size">24px</span>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="alert">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-alert" aria-hidden="true"></i>
                <div class="icon-title">alert</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-arrow-down" aria-hidden="true"></i>
                <div class="icon-title">arrow-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-arrow-left" aria-hidden="true"></i>
                <div class="icon-title">arrow-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-arrow-right" aria-hidden="true"></i>
                <div class="icon-title">arrow-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-small-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-arrow-small-down" aria-hidden="true"></i>
                <div class="icon-title">arrow-small-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-small-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-arrow-small-left" aria-hidden="true"></i>
                <div class="icon-title">arrow-small-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-small-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-arrow-small-right" aria-hidden="true"></i>
                <div class="icon-title">arrow-small-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-small-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-arrow-small-up" aria-hidden="true"></i>
                <div class="icon-title">arrow-small-up</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="arrow-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-arrow-up" aria-hidden="true"></i>
                <div class="icon-title">arrow-up</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="beaker">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-beaker" aria-hidden="true"></i>
                <div class="icon-title">beaker</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bell">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-bell" aria-hidden="true"></i>
                <div class="icon-title">bell</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="book">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-book" aria-hidden="true"></i>
                <div class="icon-title">book</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bookmark">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-bookmark" aria-hidden="true"></i>
                <div class="icon-title">bookmark</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="briefcase">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-briefcase" aria-hidden="true"></i>
                <div class="icon-title">briefcase</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="broadcast">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-broadcast" aria-hidden="true"></i>
                <div class="icon-title">broadcast</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="browser">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-browser" aria-hidden="true"></i>
                <div class="icon-title">browser</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="bug">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-bug" aria-hidden="true"></i>
                <div class="icon-title">bug</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="calendar">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-calendar" aria-hidden="true"></i>
                <div class="icon-title">calendar</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="check">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-check" aria-hidden="true"></i>
                <div class="icon-title">check</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="checklist">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-checklist" aria-hidden="true"></i>
                <div class="icon-title">checklist</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="chevron-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-chevron-down" aria-hidden="true"></i>
                <div class="icon-title">chevron-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="chevron-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-chevron-left" aria-hidden="true"></i>
                <div class="icon-title">chevron-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="chevron-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-chevron-right" aria-hidden="true"></i>
                <div class="icon-title">chevron-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="chevron-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-chevron-up" aria-hidden="true"></i>
                <div class="icon-title">chevron-up</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="circle-slash">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-circle-slash" aria-hidden="true"></i>
                <div class="icon-title">circle-slash</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="circuit-board">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-circuit-board" aria-hidden="true"></i>
                <div class="icon-title">circuit-board</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="clippy">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-clippy" aria-hidden="true"></i>
                <div class="icon-title">clippy</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="clock">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-clock" aria-hidden="true"></i>
                <div class="icon-title">clock</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud-download">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-cloud-download" aria-hidden="true"></i>
                <div class="icon-title">cloud-download</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="cloud-upload">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-cloud-upload" aria-hidden="true"></i>
                <div class="icon-title">cloud-upload</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="code">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-code" aria-hidden="true"></i>
                <div class="icon-title">code</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="color-mode">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-color-mode" aria-hidden="true"></i>
                <div class="icon-title">color-mode</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-comment" aria-hidden="true"></i>
                <div class="icon-title">comment</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="comment-discussion">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-comment-discussion" aria-hidden="true"></i>
                <div class="icon-title">comment-discussion</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="credit-card">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-credit-card" aria-hidden="true"></i>
                <div class="icon-title">credit-card</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="dash">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-dash" aria-hidden="true"></i>
                <div class="icon-title">dash</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="dashboard">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-dashboard" aria-hidden="true"></i>
                <div class="icon-title">dashboard</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="database">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-database" aria-hidden="true"></i>
                <div class="icon-title">database</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="desktop-download">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-desktop-download" aria-hidden="true"></i>
                <div class="icon-title">desktop-download</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="device-camera">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-device-camera" aria-hidden="true"></i>
                <div class="icon-title">device-camera</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="device-camera-video">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-device-camera-video" aria-hidden="true"></i>
                <div class="icon-title">device-camera-video</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="device-desktop">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-device-desktop" aria-hidden="true"></i>
                <div class="icon-title">device-desktop</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="device-mobile">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-device-mobile" aria-hidden="true"></i>
                <div class="icon-title">device-mobile</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="diff">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-diff" aria-hidden="true"></i>
                <div class="icon-title">diff</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="diff-added">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-diff-added" aria-hidden="true"></i>
                <div class="icon-title">diff-added</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="diff-ignored">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-diff-ignored" aria-hidden="true"></i>
                <div class="icon-title">diff-ignored</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="diff-modified">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-diff-modified" aria-hidden="true"></i>
                <div class="icon-title">diff-modified</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="diff-removed">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-diff-removed" aria-hidden="true"></i>
                <div class="icon-title">diff-removed</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="diff-renamed">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-diff-renamed" aria-hidden="true"></i>
                <div class="icon-title">diff-renamed</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="ellipsis">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-ellipsis" aria-hidden="true"></i>
                <div class="icon-title">ellipsis</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="eye">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-eye" aria-hidden="true"></i>
                <div class="icon-title">eye</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-binary">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-file-binary" aria-hidden="true"></i>
                <div class="icon-title">file-binary</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-code">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-file-code" aria-hidden="true"></i>
                <div class="icon-title">file-code</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-directory">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-file-directory" aria-hidden="true"></i>
                <div class="icon-title">file-directory</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-media">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-file-media" aria-hidden="true"></i>
                <div class="icon-title">file-media</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-pdf">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-file-pdf" aria-hidden="true"></i>
                <div class="icon-title">file-pdf</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-submodule">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-file-submodule" aria-hidden="true"></i>
                <div class="icon-title">file-submodule</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-symlink-directory">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-file-symlink-directory" aria-hidden="true"></i>
                <div class="icon-title">file-symlink-directory</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-symlink-file">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-file-symlink-file" aria-hidden="true"></i>
                <div class="icon-title">file-symlink-file</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-text">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-file-text" aria-hidden="true"></i>
                <div class="icon-title">file-text</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="file-zip">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-file-zip" aria-hidden="true"></i>
                <div class="icon-title">file-zip</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="flame">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-flame" aria-hidden="true"></i>
                <div class="icon-title">flame</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="fold">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-fold" aria-hidden="true"></i>
                <div class="icon-title">fold</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gear">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-gear" aria-hidden="true"></i>
                <div class="icon-title">gear</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gift">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-gift" aria-hidden="true"></i>
                <div class="icon-title">gift</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gist">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-gist" aria-hidden="true"></i>
                <div class="icon-title">gist</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="gist-secret">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-gist-secret" aria-hidden="true"></i>
                <div class="icon-title">gist-secret</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="git-branch">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-git-branch" aria-hidden="true"></i>
                <div class="icon-title">git-branch</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="git-commit">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-git-commit" aria-hidden="true"></i>
                <div class="icon-title">git-commit</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="git-compare">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-git-compare" aria-hidden="true"></i>
                <div class="icon-title">git-compare</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="git-merge">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-git-merge" aria-hidden="true"></i>
                <div class="icon-title">git-merge</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="git-pull-request">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-git-pull-request" aria-hidden="true"></i>
                <div class="icon-title">git-pull-request</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="globe">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-globe" aria-hidden="true"></i>
                <div class="icon-title">globe</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="graph">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-graph" aria-hidden="true"></i>
                <div class="icon-title">graph</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="heart">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-heart" aria-hidden="true"></i>
                <div class="icon-title">heart</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="history">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-history" aria-hidden="true"></i>
                <div class="icon-title">history</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="home">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-home" aria-hidden="true"></i>
                <div class="icon-title">home</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="horizontal-rule">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-horizontal-rule" aria-hidden="true"></i>
                <div class="icon-title">horizontal-rule</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="hubot">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-hubot" aria-hidden="true"></i>
                <div class="icon-title">hubot</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="inbox">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-inbox" aria-hidden="true"></i>
                <div class="icon-title">inbox</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="info">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-info" aria-hidden="true"></i>
                <div class="icon-title">info</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="issue-closed">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-issue-closed" aria-hidden="true"></i>
                <div class="icon-title">issue-closed</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="issue-opened">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-issue-opened" aria-hidden="true"></i>
                <div class="icon-title">issue-opened</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="issue-reopened">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-issue-reopened" aria-hidden="true"></i>
                <div class="icon-title">issue-reopened</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="jersey">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-jersey" aria-hidden="true"></i>
                <div class="icon-title">jersey</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="key">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-key" aria-hidden="true"></i>
                <div class="icon-title">key</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="keyboard">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-keyboard" aria-hidden="true"></i>
                <div class="icon-title">keyboard</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="law">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-law" aria-hidden="true"></i>
                <div class="icon-title">law</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="light-bulb">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-light-bulb" aria-hidden="true"></i>
                <div class="icon-title">light-bulb</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="link">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-link" aria-hidden="true"></i>
                <div class="icon-title">link</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="link-external">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-link-external" aria-hidden="true"></i>
                <div class="icon-title">link-external</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="list-ordered">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-list-ordered" aria-hidden="true"></i>
                <div class="icon-title">list-ordered</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="list-unordered">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-list-unordered" aria-hidden="true"></i>
                <div class="icon-title">list-unordered</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="location">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-location" aria-hidden="true"></i>
                <div class="icon-title">location</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="lock">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-lock" aria-hidden="true"></i>
                <div class="icon-title">lock</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="logo-github">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-logo-github" aria-hidden="true"></i>
                <div class="icon-title">logo-github</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mail">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-mail" aria-hidden="true"></i>
                <div class="icon-title">mail</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mail-read">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-mail-read" aria-hidden="true"></i>
                <div class="icon-title">mail-read</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mail-reply">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-mail-reply" aria-hidden="true"></i>
                <div class="icon-title">mail-reply</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mark-github">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-mark-github" aria-hidden="true"></i>
                <div class="icon-title">mark-github</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="markdown">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-markdown" aria-hidden="true"></i>
                <div class="icon-title">markdown</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="megaphone">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-megaphone" aria-hidden="true"></i>
                <div class="icon-title">megaphone</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mention">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-mention" aria-hidden="true"></i>
                <div class="icon-title">mention</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="milestone">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-milestone" aria-hidden="true"></i>
                <div class="icon-title">milestone</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mirror">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-mirror" aria-hidden="true"></i>
                <div class="icon-title">mirror</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mortar-board">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-mortar-board" aria-hidden="true"></i>
                <div class="icon-title">mortar-board</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="mute">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-mute" aria-hidden="true"></i>
                <div class="icon-title">mute</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="no-newline">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-no-newline" aria-hidden="true"></i>
                <div class="icon-title">no-newline</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="octoface">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-octoface" aria-hidden="true"></i>
                <div class="icon-title">octoface</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="organization">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-organization" aria-hidden="true"></i>
                <div class="icon-title">organization</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="package">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-package" aria-hidden="true"></i>
                <div class="icon-title">package</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="paintcan">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-paintcan" aria-hidden="true"></i>
                <div class="icon-title">paintcan</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pencil">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-pencil" aria-hidden="true"></i>
                <div class="icon-title">pencil</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="person">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-person" aria-hidden="true"></i>
                <div class="icon-title">person</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pin">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-pin" aria-hidden="true"></i>
                <div class="icon-title">pin</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="plug">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-plug" aria-hidden="true"></i>
                <div class="icon-title">plug</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="plus">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-plus" aria-hidden="true"></i>
                <div class="icon-title">plus</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="primitive-dot">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-primitive-dot" aria-hidden="true"></i>
                <div class="icon-title">primitive-dot</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="primitive-square">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-primitive-square" aria-hidden="true"></i>
                <div class="icon-title">primitive-square</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="pulse">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-pulse" aria-hidden="true"></i>
                <div class="icon-title">pulse</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="question">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-question" aria-hidden="true"></i>
                <div class="icon-title">question</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="quote">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-quote" aria-hidden="true"></i>
                <div class="icon-title">quote</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="radio-tower">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-radio-tower" aria-hidden="true"></i>
                <div class="icon-title">radio-tower</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="repo">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-repo" aria-hidden="true"></i>
                <div class="icon-title">repo</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="repo-clone">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-repo-clone" aria-hidden="true"></i>
                <div class="icon-title">repo-clone</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="repo-force-push">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-repo-force-push" aria-hidden="true"></i>
                <div class="icon-title">repo-force-push</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="repo-forked">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-repo-forked" aria-hidden="true"></i>
                <div class="icon-title">repo-forked</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="repo-pull">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-repo-pull" aria-hidden="true"></i>
                <div class="icon-title">repo-pull</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="repo-push">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-repo-push" aria-hidden="true"></i>
                <div class="icon-title">repo-push</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="rocket">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-rocket" aria-hidden="true"></i>
                <div class="icon-title">rocket</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="rss">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-rss" aria-hidden="true"></i>
                <div class="icon-title">rss</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="ruby">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-ruby" aria-hidden="true"></i>
                <div class="icon-title">ruby</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="screen-full">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-screen-full" aria-hidden="true"></i>
                <div class="icon-title">screen-full</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="screen-normal">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-screen-normal" aria-hidden="true"></i>
                <div class="icon-title">screen-normal</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="search">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-search" aria-hidden="true"></i>
                <div class="icon-title">search</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="server">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-server" aria-hidden="true"></i>
                <div class="icon-title">server</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="settings">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-settings" aria-hidden="true"></i>
                <div class="icon-title">settings</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="shield">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-shield" aria-hidden="true"></i>
                <div class="icon-title">shield</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sign-in">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-sign-in" aria-hidden="true"></i>
                <div class="icon-title">sign-in</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sign-out">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-sign-out" aria-hidden="true"></i>
                <div class="icon-title">sign-out</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="squirrel">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-squirrel" aria-hidden="true"></i>
                <div class="icon-title">squirrel</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="star">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-star" aria-hidden="true"></i>
                <div class="icon-title">star</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="stop">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-stop" aria-hidden="true"></i>
                <div class="icon-title">stop</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="sync">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-sync" aria-hidden="true"></i>
                <div class="icon-title">sync</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tag">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-tag" aria-hidden="true"></i>
                <div class="icon-title">tag</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="telescope">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-telescope" aria-hidden="true"></i>
                <div class="icon-title">telescope</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="terminal">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-terminal" aria-hidden="true"></i>
                <div class="icon-title">terminal</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="three-bars">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-three-bars" aria-hidden="true"></i>
                <div class="icon-title">three-bars</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="thumbsdown">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-thumbsdown" aria-hidden="true"></i>
                <div class="icon-title">thumbsdown</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="thumbsup">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-thumbsup" aria-hidden="true"></i>
                <div class="icon-title">thumbsup</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="tools">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-tools" aria-hidden="true"></i>
                <div class="icon-title">tools</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="trashcan">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-trashcan" aria-hidden="true"></i>
                <div class="icon-title">trashcan</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="triangle-down">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-triangle-down" aria-hidden="true"></i>
                <div class="icon-title">triangle-down</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="triangle-left">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-triangle-left" aria-hidden="true"></i>
                <div class="icon-title">triangle-left</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="triangle-right">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-triangle-right" aria-hidden="true"></i>
                <div class="icon-title">triangle-right</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="triangle-up">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-triangle-up" aria-hidden="true"></i>
                <div class="icon-title">triangle-up</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="unfold">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-unfold" aria-hidden="true"></i>
                <div class="icon-title">unfold</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="unmute">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-unmute" aria-hidden="true"></i>
                <div class="icon-title">unmute</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="versions">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-versions" aria-hidden="true"></i>
                <div class="icon-title">versions</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="watch">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-watch" aria-hidden="true"></i>
                <div class="icon-title">watch</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="x">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-x" aria-hidden="true"></i>
                <div class="icon-title">x</div>
              </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4 icondemo-wrap vertical-align" data-name="zap">
              <div class="icondemo vertical-align-middle">
                <i class="icon oi-zap" aria-hidden="true"></i>
                <div class="icon-title">zap</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<br/>
	
	@stop
	