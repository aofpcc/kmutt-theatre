<?php

?>

<head>
  
    <script id="facebook-ixsdk" src="/layouts/group2/js/done/platform.Extensions.js"></script>
    <script async="" src="/layouts/group2/js/done/gtm.js"></script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5F757MC');</script>

    <style type="text/css">
        svg,
        img {
            width: 20px;
        }
    </style>
    <link rel="preload" href="/layouts/group2/js/done/manifest.86920d2276921dc8f875.js" as="script">
    <link rel="preload" href="/layouts/group2/js/done/vendor.eb91d5bf77b2c769fcc2.js" as="script">
    <link rel="preload" href="/layouts/group2/js/done/app.baa2eadcab44e34fea36.js" as="script">
    <link rel="prefetch" href="/layouts/group2/js/done/0.d54eb28f06766c18886b.js">
   
    <link rel="prefetch" href="/layouts/group2/js/done/16.fc3c2639efa97e67ce52.js">
    
    <link rel="prefetch" href="/layouts/group2/js/done/28.5f5b3aeb7ab5558122bd.js">
    
    <link rel="stylesheet" href="/layouts/group2/css/maincss/common.baa2eadcab44e34fea36.css">

    <script type="text/javascript" charset="utf-8" async="" src="/layouts/group2/js/done/28.5f5b3aeb7ab5558122bd.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="/layouts/group2/js/done/16.fc3c2639efa97e67ce52.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="/layouts/group2/js/done/0.d54eb28f06766c18886b.js"></script>

    <style type="text/css">
        .vdp-datepicker {
            position: relative;
            text-align: left
        }

        .vdp-datepicker * {
            box-sizing: border-box
        }

        .vdp-datepicker__calendar {
            position: absolute;
            z-index: 100;
            background: #fff;
            width: 300px;
            border: 1px solid #ccc
        }

        .vdp-datepicker__calendar header {
            display: block;
            line-height: 40px
        }

        .vdp-datepicker__calendar header span {
            display: inline-block;
            text-align: center;
            width: 71.42857142857143%;
            float: left
        }

        .vdp-datepicker__calendar header .next,
        .vdp-datepicker__calendar header .prev {
            width: 14.285714285714286%;
            float: left;
            text-indent: -10000px;
            position: relative
        }

        .vdp-datepicker__calendar header .next:after,
        .vdp-datepicker__calendar header .prev:after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            -ms-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            border: 6px solid transparent
        }

        .vdp-datepicker__calendar header .prev:after {
            border-right: 10px solid #000;
            margin-left: -5px
        }

        .vdp-datepicker__calendar header .prev.disabled:after {
            border-right: 10px solid #ddd
        }

        .vdp-datepicker__calendar header .next:after {
            border-left: 10px solid #000;
            margin-left: 5px
        }

        .vdp-datepicker__calendar header .next.disabled:after {
            border-left: 10px solid #ddd
        }

        .vdp-datepicker__calendar header .next:not(.disabled),
        .vdp-datepicker__calendar header .prev:not(.disabled),
        .vdp-datepicker__calendar header .up:not(.disabled) {
            cursor: pointer
        }

        .vdp-datepicker__calendar header .next:not(.disabled):hover,
        .vdp-datepicker__calendar header .prev:not(.disabled):hover,
        .vdp-datepicker__calendar header .up:not(.disabled):hover {
            background: #eee
        }

        .vdp-datepicker__calendar .disabled {
            color: #ddd;
            cursor: default
        }

        .vdp-datepicker__calendar .cell {
            display: inline-block;
            padding: 0 5px;
            width: 14.285714285714286%;
            height: 40px;
            line-height: 40px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid transparent
        }

        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).day,
        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).month,
        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).year {
            cursor: pointer
        }

        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).day:hover,
        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).month:hover,
        .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).year:hover {
            border: 1px solid #4bd
        }

        .vdp-datepicker__calendar .cell.selected,
        .vdp-datepicker__calendar .cell.selected.highlighted,
        .vdp-datepicker__calendar .cell.selected:hover {
            background: #4bd
        }

        .vdp-datepicker__calendar .cell.highlighted {
            background: #cae5ed
        }

        .vdp-datepicker__calendar .cell.grey {
            color: #888
        }

        .vdp-datepicker__calendar .cell.grey:hover {
            background: inherit
        }

        .vdp-datepicker__calendar .cell.day-header {
            font-size: 75%;
            white-space: no-wrap;
            cursor: inherit
        }

        .vdp-datepicker__calendar .cell.day-header:hover {
            background: inherit
        }

        .vdp-datepicker__calendar .month,
        .vdp-datepicker__calendar .year {
            width: 33.333%
        }

        .vdp-datepicker__calendar-button,
        .vdp-datepicker__clear-button {
            cursor: pointer;
            font-style: normal
        }

        /*# sourceURL=/var/www/html/web-tmp/sf-web/assets/vendor/vuejs-datepicker/src/Datepicker.vue */
        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi92YXIvd3d3L2h0bWwvd2ViLXRtcC9zZi13ZWIvYXNzZXRzL3ZlbmRvci92dWVqcy1kYXRlcGlja2VyL3NyYy9EYXRlcGlja2VyLnZ1ZSJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFDQSxnQkFDRSxrQkFBbUIsQUFDbkIsZUFBaUIsQ0FDbEIsQUFDRCxrQkFDRSxxQkFBdUIsQ0FDeEIsQUFDRCwwQkFDRSxrQkFBbUIsQUFDbkIsWUFBYSxBQUNiLGdCQUFpQixBQUNqQixZQUFhLEFBQ2IscUJBQXVCLENBQ3hCLEFBQ0QsaUNBQ0UsY0FBZSxBQUNmLGdCQUFrQixDQUNuQixBQUNELHNDQUNFLHFCQUFzQixBQUN0QixrQkFBbUIsQUFDbkIseUJBQTBCLEFBQzFCLFVBQVksQ0FDYixBQUNELDhFQUVFLDBCQUEyQixBQUMzQixXQUFZLEFBQ1oscUJBQXNCLEFBQ3RCLGlCQUFtQixDQUNwQixBQUNELDBGQUVFLFdBQVksQUFDWixrQkFBbUIsQUFDbkIsU0FBVSxBQUNWLFFBQVMsQUFDVCxnREFBaUQsQUFDN0MsNENBQTZDLEFBQ2pELDRCQUE4QixDQUMvQixBQUNELDZDQUNFLDZCQUE4QixBQUM5QixnQkFBa0IsQ0FDbkIsQUFDRCxzREFDRSw0QkFBOEIsQ0FDL0IsQUFDRCw2Q0FDRSw0QkFBNkIsQUFDN0IsZUFBaUIsQ0FDbEIsQUFDRCxzREFDRSwyQkFBNkIsQ0FDOUIsQUFDRCxnS0FHRSxjQUFnQixDQUNqQixBQUNELGtMQUdFLGVBQWlCLENBQ2xCLEFBQ0Qsb0NBQ0UsV0FBWSxBQUNaLGNBQWdCLENBQ2pCLEFBQ0QsZ0NBQ0UscUJBQXNCLEFBQ3RCLGNBQWUsQUFDZiwwQkFBMkIsQUFDM0IsWUFBYSxBQUNiLGlCQUFrQixBQUNsQixrQkFBbUIsQUFDbkIsc0JBQXVCLEFBQ3ZCLDRCQUE4QixDQUMvQixBQUNELGdNQUdFLGNBQWdCLENBQ2pCLEFBQ0Qsa05BR0UscUJBQXVCLENBQ3hCLEFBT0QsNklBQ0UsZUFBaUIsQ0FDbEIsQUFDRCw0Q0FDRSxrQkFBb0IsQ0FDckIsQUFDRCxxQ0FDRSxVQUFZLENBQ2IsQUFDRCwyQ0FDRSxrQkFBb0IsQ0FDckIsQUFDRCwyQ0FDRSxjQUFlLEFBQ2Ysb0JBQXFCLEFBQ3JCLGNBQWdCLENBQ2pCLEFBQ0QsaURBQ0Usa0JBQW9CLENBQ3JCLEFBQ0QsaUVBRUUsYUFBZSxDQUNoQixBQUNELCtEQUVFLGVBQWdCLEFBQ2hCLGlCQUFtQixDQUNwQiIsImZpbGUiOiJEYXRlcGlja2VyLnZ1ZSIsInNvdXJjZXNDb250ZW50IjpbIlxuLnZkcC1kYXRlcGlja2VyIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB0ZXh0LWFsaWduOiBsZWZ0O1xufVxuLnZkcC1kYXRlcGlja2VyICoge1xuICBib3gtc2l6aW5nOiBib3JkZXItYm94O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgei1pbmRleDogMTAwO1xuICBiYWNrZ3JvdW5kOiAjZmZmO1xuICB3aWR0aDogMzAwcHg7XG4gIGJvcmRlcjogMXB4IHNvbGlkICNjY2M7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICBsaW5lLWhlaWdodDogNDBweDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIHNwYW4ge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgd2lkdGg6IDcxLjQyODU3MTQyODU3MTQzJTtcbiAgZmxvYXQ6IGxlZnQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAucHJldixcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC5uZXh0IHtcbiAgd2lkdGg6IDE0LjI4NTcxNDI4NTcxNDI4NiU7XG4gIGZsb2F0OiBsZWZ0O1xuICB0ZXh0LWluZGVudDogLTEwMDAwcHg7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC5wcmV2OmFmdGVyLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLm5leHQ6YWZ0ZXIge1xuICBjb250ZW50OiAnJztcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICBsZWZ0OiA1MCU7XG4gIHRvcDogNTAlO1xuICAtbXMtdHJhbnNmb3JtOiB0cmFuc2xhdGVYKC01MCUpIHRyYW5zbGF0ZVkoLTUwJSk7XG4gICAgICB0cmFuc2Zvcm06IHRyYW5zbGF0ZVgoLTUwJSkgdHJhbnNsYXRlWSgtNTAlKTtcbiAgYm9yZGVyOiA2cHggc29saWQgdHJhbnNwYXJlbnQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAucHJldjphZnRlciB7XG4gIGJvcmRlci1yaWdodDogMTBweCBzb2xpZCAjMDAwO1xuICBtYXJnaW4tbGVmdDogLTVweDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC5wcmV2LmRpc2FibGVkOmFmdGVyIHtcbiAgYm9yZGVyLXJpZ2h0OiAxMHB4IHNvbGlkICNkZGQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAubmV4dDphZnRlciB7XG4gIGJvcmRlci1sZWZ0OiAxMHB4IHNvbGlkICMwMDA7XG4gIG1hcmdpbi1sZWZ0OiA1cHg7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAubmV4dC5kaXNhYmxlZDphZnRlciB7XG4gIGJvcmRlci1sZWZ0OiAxMHB4IHNvbGlkICNkZGQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAucHJldjpub3QoLmRpc2FibGVkKSxcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC5uZXh0Om5vdCguZGlzYWJsZWQpLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLnVwOm5vdCguZGlzYWJsZWQpIHtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLnByZXY6bm90KC5kaXNhYmxlZCk6aG92ZXIsXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAubmV4dDpub3QoLmRpc2FibGVkKTpob3Zlcixcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC51cDpub3QoLmRpc2FibGVkKTpob3ZlciB7XG4gIGJhY2tncm91bmQ6ICNlZWU7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5kaXNhYmxlZCB7XG4gIGNvbG9yOiAjZGRkO1xuICBjdXJzb3I6IGRlZmF1bHQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICBwYWRkaW5nOiAwIDVweDtcbiAgd2lkdGg6IDE0LjI4NTcxNDI4NTcxNDI4NiU7XG4gIGhlaWdodDogNDBweDtcbiAgbGluZS1oZWlnaHQ6IDQwcHg7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbiAgYm9yZGVyOiAxcHggc29saWQgdHJhbnNwYXJlbnQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsOm5vdCguYmxhbmspOm5vdCguZGlzYWJsZWQpLmRheSxcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGw6bm90KC5ibGFuayk6bm90KC5kaXNhYmxlZCkubW9udGgsXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsOm5vdCguYmxhbmspOm5vdCguZGlzYWJsZWQpLnllYXIge1xuICBjdXJzb3I6IHBvaW50ZXI7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsOm5vdCguYmxhbmspOm5vdCguZGlzYWJsZWQpLmRheTpob3Zlcixcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGw6bm90KC5ibGFuayk6bm90KC5kaXNhYmxlZCkubW9udGg6aG92ZXIsXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsOm5vdCguYmxhbmspOm5vdCguZGlzYWJsZWQpLnllYXI6aG92ZXIge1xuICBib3JkZXI6IDFweCBzb2xpZCAjNGJkO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbC5zZWxlY3RlZCB7XG4gIGJhY2tncm91bmQ6ICM0YmQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsLnNlbGVjdGVkOmhvdmVyIHtcbiAgYmFja2dyb3VuZDogIzRiZDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGwuc2VsZWN0ZWQuaGlnaGxpZ2h0ZWQge1xuICBiYWNrZ3JvdW5kOiAjNGJkO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbC5oaWdobGlnaHRlZCB7XG4gIGJhY2tncm91bmQ6ICNjYWU1ZWQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsLmdyZXkge1xuICBjb2xvcjogIzg4ODtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGwuZ3JleTpob3ZlciB7XG4gIGJhY2tncm91bmQ6IGluaGVyaXQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsLmRheS1oZWFkZXIge1xuICBmb250LXNpemU6IDc1JTtcbiAgd2hpdGUtc3BhY2U6IG5vLXdyYXA7XG4gIGN1cnNvcjogaW5oZXJpdDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGwuZGF5LWhlYWRlcjpob3ZlciB7XG4gIGJhY2tncm91bmQ6IGluaGVyaXQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5tb250aCxcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLnllYXIge1xuICB3aWR0aDogMzMuMzMzJTtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2xlYXItYnV0dG9uLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhci1idXR0b24ge1xuICBjdXJzb3I6IHBvaW50ZXI7XG4gIGZvbnQtc3R5bGU6IG5vcm1hbDtcbn0iXSwic291cmNlUm9vdCI6IiJ9 */
    </style>
    <style type="text/css">
        /*# sourceURL=undefined */
        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJBY2NvdW50U2lkZWJhci52dWUiLCJzb3VyY2VSb290IjoiIn0= */
    </style>
    <style type="text/css">
        /*# sourceURL=undefined */
        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJBY2NvdW50V2VsY29tZS52dWUiLCJzb3VyY2VSb290IjoiIn0= */
    </style>
    <style type="text/css">
        /*# sourceURL=undefined */
        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJCb29raW5nSXRlbS52dWUiLCJzb3VyY2VSb290IjoiIn0= */
    </style>
    <style type="text/css">
        /*!
 * Cropper.js v1.4.1
 * https://fengyuanchen.github.io/cropperjs
 *
 * Copyright 2015-present Chen Fengyuan
 * Released under the MIT license
 *
 * Date: 2018-07-15T09:54:43.167Z
 */
        .cropper-container {
            direction: ltr;
            font-size: 0;
            line-height: 0;
            position: relative;
            -ms-touch-action: none;
            touch-action: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .cropper-container img {
            display: block;
            height: 100%;
            image-orientation: 0deg;
            max-height: none !important;
            max-width: none !important;
            min-height: 0 !important;
            min-width: 0 !important;
            width: 100%
        }

        .cropper-canvas,
        .cropper-crop-box,
        .cropper-drag-box,
        .cropper-modal,
        .cropper-wrap-box {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .cropper-canvas,
        .cropper-wrap-box {
            overflow: hidden
        }

        .cropper-drag-box {
            background-color: #fff;
            opacity: 0
        }

        .cropper-modal {
            background-color: #000;
            opacity: .5
        }

        .cropper-view-box {
            display: block;
            height: 100%;
            outline-color: rgba(51, 153, 255, .75);
            outline: 1px solid #39f;
            overflow: hidden;
            width: 100%
        }

        .cropper-dashed {
            border: 0 dashed #eee;
            display: block;
            opacity: .5;
            position: absolute
        }

        .cropper-dashed.dashed-h {
            border-bottom-width: 1px;
            border-top-width: 1px;
            height: 33.33333%;
            left: 0;
            top: 33.33333%;
            width: 100%
        }

        .cropper-dashed.dashed-v {
            border-left-width: 1px;
            border-right-width: 1px;
            height: 100%;
            left: 33.33333%;
            top: 0;
            width: 33.33333%
        }

        .cropper-center {
            display: block;
            height: 0;
            left: 50%;
            opacity: .75;
            position: absolute;
            top: 50%;
            width: 0
        }

        .cropper-center:after,
        .cropper-center:before {
            background-color: #eee;
            content: " ";
            display: block;
            position: absolute
        }

        .cropper-center:before {
            height: 1px;
            left: -3px;
            top: 0;
            width: 7px
        }

        .cropper-center:after {
            height: 7px;
            left: 0;
            top: -3px;
            width: 1px
        }

        .cropper-face,
        .cropper-line,
        .cropper-point {
            display: block;
            height: 100%;
            opacity: .1;
            position: absolute;
            width: 100%
        }

        .cropper-face {
            background-color: #fff;
            left: 0;
            top: 0
        }

        .cropper-line {
            background-color: #39f
        }

        .cropper-line.line-e {
            cursor: ew-resize;
            right: -3px;
            top: 0;
            width: 5px
        }

        .cropper-line.line-n {
            cursor: ns-resize;
            height: 5px;
            left: 0;
            top: -3px
        }

        .cropper-line.line-w {
            cursor: ew-resize;
            left: -3px;
            top: 0;
            width: 5px
        }

        .cropper-line.line-s {
            bottom: -3px;
            cursor: ns-resize;
            height: 5px;
            left: 0
        }

        .cropper-point {
            background-color: #39f;
            height: 5px;
            opacity: .75;
            width: 5px
        }

        .cropper-point.point-e {
            cursor: ew-resize;
            margin-top: -3px;
            right: -3px;
            top: 50%
        }

        .cropper-point.point-n {
            cursor: ns-resize;
            left: 50%;
            margin-left: -3px;
            top: -3px
        }

        .cropper-point.point-w {
            cursor: ew-resize;
            left: -3px;
            margin-top: -3px;
            top: 50%
        }

        .cropper-point.point-s {
            bottom: -3px;
            cursor: s-resize;
            left: 50%;
            margin-left: -3px
        }

        .cropper-point.point-ne {
            cursor: nesw-resize;
            right: -3px;
            top: -3px
        }

        .cropper-point.point-nw {
            cursor: nwse-resize;
            left: -3px;
            top: -3px
        }

        .cropper-point.point-sw {
            bottom: -3px;
            cursor: nesw-resize;
            left: -3px
        }

        .cropper-point.point-se {
            bottom: -3px;
            cursor: nwse-resize;
            height: 20px;
            opacity: 1;
            right: -3px;
            width: 20px
        }

        @media (min-width:768px) {
            .cropper-point.point-se {
                height: 15px;
                width: 15px
            }
        }

        @media (min-width:992px) {
            .cropper-point.point-se {
                height: 10px;
                width: 10px
            }
        }

        @media (min-width:1200px) {
            .cropper-point.point-se {
                height: 5px;
                opacity: .75;
                width: 5px
            }
        }

        .cropper-point.point-se:before {
            background-color: #39f;
            bottom: -50%;
            content: " ";
            display: block;
            height: 200%;
            opacity: 0;
            position: absolute;
            right: -50%;
            width: 200%
        }

        .cropper-invisible {
            opacity: 0
        }

        .cropper-bg {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAQMAAAAlPW0iAAAAA3NCSVQICAjb4U/gAAAABlBMVEXMzMz////TjRV2AAAACXBIWXMAAArrAAAK6wGCiw1aAAAAHHRFWHRTb2Z0d2FyZQBBZG9iZSBGaXJld29ya3MgQ1M26LyyjAAAABFJREFUCJlj+M/AgBVhF/0PAH6/D/HkDxOGAAAAAElFTkSuQmCC")
        }

        .cropper-hide {
            display: block;
            height: 0;
            position: absolute;
            width: 0
        }

        .cropper-hidden {
            display: none !important
        }

        .cropper-move {
            cursor: move
        }

        .cropper-crop {
            cursor: crosshair
        }

        .cropper-disabled .cropper-drag-box,
        .cropper-disabled .cropper-face,
        .cropper-disabled .cropper-line,
        .cropper-disabled .cropper-point {
            cursor: not-allowed
        }

        
    </style>
    <style type="text/css">
        
    </style>
</head>

<body data-gr-c-s-loaded="true" class="opened-ticket">
    <script>
        (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/platform.Extensions.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-ixsdk'));
    </script>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5F757MC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div id="app" class="is-grayscale">
        <!---->
        <div id="header">
            <div class="container">
                <div class="logo"><a href="https://www.sfcinemacity.com/" class="logo-link"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 172.8 69" xml:space="preserve"
                            class="sf-logo" style="enable-background:new 0 0 172.8 69;">
                            <g>
                                <g id="XMLID_1_">
                                    <g id="XMLID_2_">
                                        <g id="XMLID_3_">
                                            <path id="XMLID_4_" d="M20.7,41.9C8.1,41.9,0,34.3,0,21.1C0,8.7,9.3,0,20.7,0L90,0c-2.4,7.4-5.6,14.8-19.6,14.8
    					c0,0-43.4,0-48.8,0c-3.7,0-6.7,2.5-6.7,6.2c0,3.7,3,6,6.7,6l47.7,0c12.7,0,20.7,7.6,20.7,20.8c0,12.5-9.3,21.1-20.7,21.1L0,69
    					c2.4-7.4,5.6-14.8,19.6-14.8c0,0,43.4,0,48.8,0c3.7,0,6.7-2.4,6.7-6.1c0-3.7-3-6.1-6.7-6.1L20.7,41.9z M90,68.9h14.9V48.2
    					c0-3.7,3-6.2,6.7-6.2c5.5,0,61.3,0,61.3,0V27.1l-62.1,0C99.2,27.1,90,35.8,90,48.2L90,68.9z M172.8,0L90,0
    					c2.4,7.4,5.6,14.8,19.6,14.8c0,0,57.8,0,63.2,0V0z"
                                                class="logo-color"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg></a></div><a href="https://www.sfcinemacity.com/sf-movie-club" class="sf-movie-club-card"><svg
                        viewBox="0 0 22 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        class="sf-icon club-card">
                        <defs>
                            <polygon id="path-1" points="0 9.96441281 13.8983273 9.96441281 13.8983273 0.0238078292 0 0.0238078292"></polygon>
                        </defs>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M20.5651437,0.35 L1.43485635,0.35 C0.83295167,0.35 0.35,0.81589653 0.35,1.38384783 L0.35,12.6161522 C0.35,13.1847735 0.832519881,13.65 1.43485635,13.65 L20.5651437,13.65 C21.1674801,13.65 21.65,13.1847735 21.65,12.6161522 L21.65,1.38384783 C21.65,0.81589653 21.1670483,0.35 20.5651437,0.35 Z"
                                id="Stroke-3" stroke="#6A6A6A" stroke-width="0.7"></path>
                            <g id="img/movieclub" transform="translate(6.000000, 2.000000)">
                                <g id="Page-1">
                                    <polygon id="Fill-1" fill="#6B6B6D" points="2.88216364 3.66796085 2.33401818 3.66796085 1.81441818 5.56899288 1.79838182 5.56899288 1.27878182 3.66796085 1.05969091 3.66796085 0.579727273 3.66796085 0.0363454545 3.66796085 0.0363454545 6.48151957 0.730636364 6.48151957 0.730636364 4.28290747 0.747836364 4.28290747 1.26743636 6.1839395 1.44158182 6.1839395 1.96652727 6.1839395 2.34536364 6.1839395 2.86503636 4.28290747 2.88216364 4.28290747 2.88216364 6.48151957 3.57645455 6.48151957 3.57645455 3.66796085"></polygon>
                                    <g id="Group-14" transform="translate(0.036364, 0.011779)">
                                        <path d="M5.80461818,5.89497865 C6.00432727,5.89497865 6.05603636,5.85700712 6.05603636,5.60156228 L6.05603636,4.52636655 C6.05603636,4.27099288 6.00432727,4.23295018 5.80461818,4.23295018 L5.00352727,4.23295018 C4.80381818,4.23295018 4.75210909,4.27099288 4.75210909,4.52636655 L4.75210909,5.60156228 C4.75210909,5.85700712 4.80381818,5.89497865 5.00352727,5.89497865 L5.80461818,5.89497865 Z M4.05778182,5.70608185 L4.05778182,4.41985409 C4.05778182,3.8973274 4.35101818,3.61597509 4.89570909,3.61597509 L5.9124,3.61597509 C6.45701818,3.61597509 6.75029091,3.8973274 6.75029091,4.41985409 L6.75029091,5.70608185 C6.75029091,6.22860854 6.45701818,6.50996085 5.9124,6.50996085 L4.89570909,6.50996085 C4.35101818,6.50996085 4.05778182,6.22860854 4.05778182,5.70608185 Z"
                                            id="Fill-2" fill="#6B6B6D"></path>
                                        <polygon id="Fill-4" fill="#6B6B6D" points="9.93117818 3.65616726 8.96121455 6.46976157 8.58965091 6.46976157 8.10012364 6.46976157 7.89106909 6.46976157 6.92117818 3.65616726 7.68605091 3.65616726 8.39216 5.85477936 8.46016 5.85477936 9.16630545 3.65616726"></polygon>
                                        <mask id="mask-2" fill="white">
                                            <use xlink:href="#path-1"></use>
                                        </mask>
                                        <g id="Clip-7"></g>
                                        <polygon id="Fill-6" fill="#6B6B6D" mask="url(#mask-2)" points="10.2545091 6.46975089 10.9488 6.46975089 10.9488 3.65615658 10.2545091 3.65615658"></polygon>
                                        <polygon id="Fill-8" fill="#6B6B6D" mask="url(#mask-2)" points="12.2252145 4.27113879 12.2252145 4.73537367 13.6231782 4.73537367 13.6231782 5.35035587 12.2252145 5.35035587 12.2252145 5.85476868 13.7923418 5.85476868 13.7923418 6.46975089 11.8572509 6.46975089 11.5309236 6.46975089 11.5309236 3.65615658 12.2252145 3.65615658 13.7923418 3.65615658 13.7923418 4.27113879"></polygon>
                                        <path d="M2.94534909,9.16053737 L2.94534909,7.87430961 C2.94534909,7.35178292 3.23858545,7.0704306 3.78327636,7.0704306 L5.21324,7.0704306 L5.21324,7.68740569 L3.89109455,7.68740569 C3.69138545,7.68740569 3.63967636,7.7254484 3.63967636,7.98082206 L3.63967636,9.05601779 C3.63967636,9.31146263 3.69138545,9.34943416 3.89109455,9.34943416 L5.21324,9.34943416 L5.21324,9.96441637 L3.78327636,9.96441637 C3.23858545,9.96441637 2.94534909,9.68306406 2.94534909,9.16053737"
                                            id="Fill-9" fill="#6B6B6D" mask="url(#mask-2)"></path>
                                        <polygon id="Fill-10" fill="#6B6B6D" mask="url(#mask-2)" points="7.78977091 9.30924555 7.78977091 9.92422776 5.94958909 9.92422776 5.62326182 9.92422776 5.62326182 7.11063345 6.31755273 7.11063345 6.31755273 9.30924555"></polygon>
                                        <path d="M8.94801091,9.96441281 C8.40466545,9.96441281 8.11139273,9.6830605 8.11139273,9.16053381 L8.11139273,7.11064057 L8.80572,7.11064057 L8.80572,9.05601423 C8.80572,9.31327402 8.85742909,9.3494306 9.05579273,9.3494306 L9.77597455,9.3494306 C9.97433818,9.3494306 10.0260473,9.31327402 10.0260473,9.05601423 L10.0260473,7.11064057 L10.7203745,7.11064057 L10.7203745,9.16053381 C10.7203745,9.6830605 10.4271382,9.96441281 9.88375636,9.96441281 L8.94797455,9.96441281 L8.94801091,9.96441281 Z"
                                            id="Fill-11" fill="#6B6B6D" mask="url(#mask-2)"></path>
                                        <path d="M13.1391345,8.99420996 C13.1391345,8.82990391 13.0898618,8.79641637 12.9436073,8.79641637 L11.9751345,8.79641637 L11.9751345,9.30926335 L12.9436073,9.30926335 C13.0898618,9.30926335 13.1391345,9.2757758 13.1391345,9.11143416 L13.1391345,8.99420996 Z M11.9751345,7.72762633 L11.9751345,8.18143416 L12.8061527,8.18143416 C12.9553164,8.18143416 12.9968073,8.14727046 12.9968073,7.97961922 L12.9968073,7.92944128 C12.9968073,7.76179004 12.9553164,7.72762633 12.8061527,7.72762633 L11.9751345,7.72762633 Z M13.8334255,8.95837367 L13.8334255,9.24093594 C13.8334255,9.68506406 13.5768436,9.92420996 13.1003345,9.92420996 L11.8350618,9.92420996 L11.2808436,9.92420996 L11.2808436,7.11061566 L11.9751345,7.11061566 L12.9580073,7.11061566 C13.4345164,7.11061566 13.6911345,7.34979715 13.6911345,7.79392527 L13.6911345,8.00171886 C13.6911345,8.20958363 13.6130618,8.35509964 13.4642255,8.43146975 C13.7055345,8.49595374 13.8334255,8.67737722 13.8334255,8.95837367 Z"
                                            id="Fill-12" fill="#6B6B6D" mask="url(#mask-2)"></path>
                                        <path d="M10.1885636,0.0237900356 L9.10052727,0.0237900356 L7.77627273,0.0247153025 L7.10609091,0.0247153025 C6.59634545,0.0247153025 6.18343636,0.428594306 6.18343636,0.927562278 L6.18343636,0.968309609 C6.18343636,1.46763345 6.59634545,1.83635231 7.10609091,1.83635231 L9.22965455,1.83457295 C9.39372727,1.83457295 9.52623636,1.92923488 9.52623636,2.08937722 L9.52623636,2.13158363 C9.52623636,2.2919395 9.39372727,2.42233096 9.22965455,2.42233096 L7.49343636,2.42233096 L7.18841818,2.42258007 L7.05514545,2.42225979 C6.43350909,2.42225979 6.29118182,2.71072954 6.18561818,3.03080071 L6.18343636,3.03204626 L6.18489091,3.03204626 L6.18343636,3.03311388 L6.18489091,3.03311388 C6.18478182,3.03339858 6.18463636,3.03368327 6.18452727,3.03396797 L7.2362,3.03396797 L8.56038182,3.03311388 L8.6802,3.03311388 L8.6802,3.03204626 L9.26609091,3.03204626 C9.77609091,3.03204626 10.1882364,2.62862989 10.1896182,2.13058719 L10.1896182,2.0838968 C10.1882364,1.58752669 9.77609091,1.2205516 9.26609091,1.2205516 L7.14249091,1.22204626 C6.97849091,1.22204626 6.84598182,1.12685053 6.84598182,0.967170819 L6.84598182,0.924501779 C6.84598182,0.764430605 6.97849091,0.669234875 7.14249091,0.669234875 L8.44696364,0.669234875 L9.31787273,0.671227758 C9.94023636,0.671227758 10.0828545,0.344145907 10.1885636,0.0237900356 Z M13.8983455,0.0237900356 L10.1896182,0.0237900356 C10.2954,0.342117438 10.4002,0.668131673 11.0239091,0.668131673 L13.8983455,0.668131673 L13.8983455,0.0237900356 Z M11.3708545,1.22183274 L13.8983455,1.22183274 L13.8983455,1.83457295 L11.1841273,1.83613879 C11.0063818,1.84902135 10.8520909,1.93955516 10.8520909,2.16044484 L10.8520909,3.02809609 L10.1896182,3.02809609 L10.1896182,2.09699288 C10.2025273,1.88855872 10.2563818,1.76346975 10.3370364,1.63948399 C10.3446,1.6277758 10.3525636,1.61613879 10.3607455,1.60496441 C10.3664909,1.59720641 10.3721273,1.5894484 10.3780182,1.58204626 C10.3838,1.57450178 10.3902,1.56734875 10.3962727,1.56005338 C10.6685636,1.24108541 10.9621273,1.22218861 11.2618364,1.22218861 L11.3708545,1.22183274 Z"
                                            id="Fill-13" fill="#6B6B6D" mask="url(#mask-2)"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg></a>
                <div class="top-navigation">
                    <ul>
                        <li class="my-account">
                            <div class="user-avatar">
                                <div class="name"><a href="https://www.sfcinemacity.com/booking-history#">
                                        <p>Panusron Phansod</p>
                                    </a></div>
                                <div class="avatar">
                                    <div class="image" style="background-image: url(&quot;https://lh3.googleusercontent.com/SYOZu01rJvGcaOclqS7Fq0jHP9BzFkoVHus-oodAnA30DRVgHWqzTRPb6L9Axe5dq9vM3H3lhb00cQr5QDg&quot;);"></div>
                                </div>
                            </div>
                            <div class="submenu">
                                <ul>
                                    <li><a href="https://www.sfcinemacity.com/booking-history" class="router-link-exact-active active">ประวัติการจอง/ซื้อ</a></li>
                                    <li><a href="https://www.sfcinemacity.com/profile" class="">ข้อมูลส่วนตัว</a></li>
                                    <!---->
                                    <li class="logout"><a href="https://www.sfcinemacity.com/booking-history#">ออกจากระบบ</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <ul class="lang-switcher">
                                <li class="active"><a href="https://www.sfcinemacity.com/booking-history#">ไทย</a></li>
                                <li><a href="https://www.sfcinemacity.com/booking-history#">ENG</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="navigation nav-normal">
                    <ul>
                        <li><a href="https://www.sfcinemacity.com/" class="">หน้าแรก</a></li>
                        <li class="has-submenu"><a href="https://www.sfcinemacity.com/movies" class="">ภาพยนตร์</a>
                            <ul class="submenu">
                                <li><a href="https://www.sfcinemacity.com/movies/now-showing" class="">กำลังฉาย</a></li>
                                <li><a href="https://www.sfcinemacity.com/movies/coming-soon" class="">โปรแกรมหน้า</a></li>
                                <li><a href="https://www.sfcinemacity.com/movies/film-festival" class="">เทศกาลภาพยนตร์</a></li>
                            </ul>
                        </li>
                        <li><a href="https://www.sfcinemacity.com/cinemas" class="">โรงภาพยนตร์</a></li>
                        <li><a href="https://www.sfcinemacity.com/promotions" class="">โปรโมชั่น</a></li>
                        <li><a href="https://www.sfcinemacity.com/bowling-music" class="">โบว์ลิ่งและเพลง</a></li>
                        <li><a href="https://www.sfcinemacity.com/news-activities" class="">ข่าวและกิจกรรม</a></li>
                        <li><a href="https://www.sfcinemacity.com/film-festival" class="">เทศกาลภาพยนตร์</a></li>
                        <li><a href="https://www.sfcinemacity.com/sf-movie-club" class="">บัตรเอสเอฟมูฟวี่คลับ</a></li>
                    </ul>
                </div><button type="button" class="button-toggle"><span class="bar"></span><span class="bar"></span><span
                        class="bar"></span></button>
            </div>
        </div>
        <div id="main" class="page-account">
            <div class="showtime-bar">
                <div class="container">
                    <div class="showtime-dropdown">
                        <!----><button class="showtime-btn">รอบฉาย <img src="/layouts/group2/images/done/icon_movie.svg"></button>
                        <div class="container container-inner">
                            <div class="button-wrapper"><button type="button" class="button-toggle button-close close-btn visible-xs"><span
                                        class="bar"></span><span class="bar"></span></button><button class="button dropdown-button"><span><span
                                            data-name="เอส เอฟ ซีเนม่า เดอะมอลล์ ท่าพระ"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 82.97 119.39" class="sf-icon location hidden-sm hidden-md hidden-lg">
                                                <defs></defs>
                                                <title>location</title>
                                                <path d="M74.77,59.56C77.18,53.12,79,46.69,79,39,79,19.67,60.82,4,41.49,4S4,19.67,4,39c0,8.08,2.27,14.46,4.87,21.45l33.55,54.93Z"
                                                    class="cls-1"></path>
                                                <circle cx="41.49" cy="40.25" r="7.85" class="cls-2"></circle>
                                            </svg>เอส เอฟ ซีเนม่า เดอะมอลล์ ท่าพระ</span></span></button><button class="button dropdown-button"><span><span
                                            data-name="ภาพยนตร์ทั้งหมด"><img src="/layouts/group2/images/done/icon_movie.svg"
                                                class="sf-icon icon-cinema hidden-sm hidden-md hidden-lg">ภาพยนตร์ทั้งหมด</span></span></button><button
                                    class="button showtime-button">รอบฉาย</button></div>
                            <!---->
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-ticket">
                <div class="popup-inner">
                    <div class="container">
                        <div class="ticket-wrapper"><button type="button" class="button-toggle button-close ticket-close"><span
                                    class="bar"></span><span class="bar"></span></button>
                            <div class="ticket">
                                <div class="ticket-border border-top"><img src="/layouts/group2/images/done/ticket-border-top.png"></div>
                                <div class="content">
                                    <div class="desktop">
                                        <div class="poster"><img src="/layouts/group2/images/done/unnamed.jpg"></div>
                                        <div class="detail">
                                            <div class="movie-section">
                                                <div class="detail-wrapper">
                                                    <div class="title">ราล์ฟตะลุยโลกอินเทอร์เน็ต วายร้ายหัวใจฮีโร่ 2</div>
                                                    <div class="movie-detail">
                                                        <div class="sound"><svg viewBox="0 0 405.88 359.77" class="sf-icon sound">
                                                                <defs></defs>
                                                                <title>sound</title>
                                                                <path d="M226.08,359.77a11.5,11.5,0,0,1-6.9-2.3L112.91,277.7C107.14,274,93,264.48,93,248.58V111.87c0-14.3,10.53-23.39,19.81-29.72L219.17,2.3a11.5,11.5,0,0,1,6.9-2.3,26.53,26.53,0,0,1,26.5,26.5V333.27A26.53,26.53,0,0,1,226.08,359.77ZM228.55,24L126.4,100.7,126,101c-6.7,4.55-10,8.11-10,10.85V248.58c0,1.39,1.27,4.53,9.76,10,0.22,0.14.44,0.29,0.65,0.45l102.15,76.67a3.49,3.49,0,0,0,1-2.48V26.5A3.49,3.49,0,0,0,228.55,24Z"
                                                                    class="cls-1"></path>
                                                                <path d="M104.5,261.94h-78C11.89,261.94,0,251.41,0,238.47V121.3c0-12.94,11.89-23.47,26.5-23.47h78a11.5,11.5,0,0,1,11.5,11.5V250.44A11.5,11.5,0,0,1,104.5,261.94ZM23,237.9a5.59,5.59,0,0,0,3.5,1H93V120.82H26.5a5.59,5.59,0,0,0-3.5,1v116Z"
                                                                    class="cls-1"></path>
                                                                <path d="M323.7,313.84a11.5,11.5,0,0,1-6-21.3,136.47,136.47,0,0,0,5-229.53A11.5,11.5,0,1,1,335.6,43.94a159.44,159.44,0,0,1-5.9,268.2A11.45,11.45,0,0,1,323.7,313.84Z"
                                                                    class="cls-1"></path>
                                                                <path d="M289.25,269.35a11.5,11.5,0,0,1-5.35-21.69,80.75,80.75,0,0,0,7.68-138.47,11.5,11.5,0,1,1,12.88-19.06A103.75,103.75,0,0,1,294.58,268,11.45,11.45,0,0,1,289.25,269.35Z"
                                                                    class="cls-1"></path>
                                                            </svg><span>TH</span></div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cinema-section">
                                               
                                                <div class="cinema-wrapper">
                                                    <div class="cinema-col">
                                                        <div class="cinema-label">โรงภาพยนตร์</div>
                                                        <div class="cinema-data">3</div>
                                                    </div>
                                                    <div class="cinema-col">
                                                        <div class="cinema-label">เลขที่นั่ง</div>
                                                        <div class="cinema-data">E17</div>
                                                    </div>
                                                </div>
                                                <div class="cinema-wrapper">
                                                    <div class="desc-col">
                                                        <div class="cinema-label">วันที่</div>
                                                        <div class="desc-data">29 พฤศจิกายน 2018</div>
                                                    </div>
                                                    <div class="desc-col">
                                                        <div class="cinema-label">เวลา</div>
                                                        <div class="desc-data">17:00</div>
                                                    </div>
                                                    <div class="desc-col">
                                                        <div class="cinema-label">ราคา</div>
                                                        <div class="desc-data">200 บาท</div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="extra-info ticket-reserve">
                                            <div class="box-wrapper">
                                                <div class="row">

                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </div>
                                    <div class="mobile">
                                        <div class="logo-wrapper"><img src="/layouts/group2/images/done/unnamed.png"></div>
                                        <div class="ticket-qr">
                                            <div value="9912|WLG4GGL" level="L" background="#fff" foreground="#000"
                                                class=""><canvas height="350" width="350" style="width: 175px; height: 175px;"></canvas></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
            <div class="account-wrapper"></div>
        </div>
        <div id="footer">
            <div class="brands-wrapper">
                <div class="container">
                    <div class="brands-list">
                        <ul>
                            <li><img src="/layouts/group2/images/done/emprive.svg" alt=""></li>
                            <li><img src="/layouts/group2/images/done/sf-w.svg" alt=""></li>
                            <li><img src="/layouts/group2/images/done/sf-x.svg" alt=""></li>
                            <li><img src="/layouts/group2/images/done/sf-c.svg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
           
        </div>
        
        <div id="loading" style="display: none;">
            <div id="loading-item"></div>
        </div>
    </div>
    <script src="/layouts/group2/js/done/manifest.86920d2276921dc8f875.js" defer=""></script>
    <script src="/layouts/group2/js/done/vendor.eb91d5bf77b2c769fcc2.js" defer=""></script>
    <script src="/layouts/group2/js/done/app.baa2eadcab44e34fea36.js" defer=""></script>

</body>