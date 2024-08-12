<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>In Progress Releases</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="/favicon.ico" type="image/ico" />
  <link rel="stylesheet" type="text/css" href="/style-v2/section-boost.css" />

  <!--[if IE 7]> <style type="text/css"> body { behavior: url(/style-v2/csshover3.htc); } </style> <![endif]-->
<script defer data-domain="original.boost.org" src="https://plausible.io/js/script.js"></script></head>
<!-- Don't edit this page! It's generated by site-tools/site-tools.py -->
<body>
  <div id="heading">
    <!--#include virtual="/common/heading.html" -->  </div>

  <div id="body">
    <div id="body-inner">
      <div id="content">
        <div class="section" id="intro">
          <div class="section-0">
            <div class="section-title">
              <h1>In Progress Releases</h1>
            </div>
            <div class="section-alert"><p>Note: The release notes
            on this page are for releases still under development.
            Please don't use this page as a source of information,
            it's here for development purposes only. Everything is
            subject to change.</p></div>

            <div class="section-body">
<?php foreach ($releases as $release): ?>
              <h2><span class=
              "news-title"><?php echo $release['full_title_xml']; ?></span></h2>

              <p><span class=news-date"><?php echo $release['web_date']; ?></span></p>
<?php echo $release['download_table'] ?>

              <div class="news-description">
                <div class="description"><?php echo $release['description_xml']; ?></div>
              </div>
<?php endforeach ?>
            </div>
          </div>
        </div>
      </div>

      <div id="sidebar">
        <!--#include virtual="/common/sidebar-common.html" --><!--#include virtual="/common/sidebar-boost.html" -->      </div>

      <div class="clear"></div>
    </div>
  </div>

  <div id="footer">
    <div id="footer-left">
      <div id="copyright">
        <p>Copyright Rene Rivera 2006-2007.</p>
      </div><!--#include virtual="/common/footer-license.html" -->    </div>

    <div id="footer-right">
      <!--#include virtual="/common/footer-banners.html" -->    </div>

    <div class="clear"></div>
  </div>
</body>
</html>
