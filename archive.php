<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <?php $this->need('public/include.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.7.2/animate.min.css" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/joe.archive.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
    <script src="<?php $this->options->themeUrl('assets/js/joe.archive.js'); ?>"></script>
</head>

<body>
    <div id="Joe">
        <?php $this->need('public/header.php'); ?>
        <div class="joe_container">
            <div class="joe_main">
                <div class="joe_archive">
                    <div class="joe_archive__title">
                        <svg width="20" height="20" class="joe_archive__title-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                            <line x1="16" y1="8" x2="2" y2="22"></line>
                            <line x1="17.5" y1="15" x2="9" y2="15"></line>
                        </svg>
                        <div class="joe_archive__title-title">
                            <span>搜索到</span>
                            <span class="muted"><?php echo $this->getTotal(); ?></span>
                            <span>篇与</span>
                            <span class="muted ellipsis"><?php echo $this->_keywords; ?></span>
                            <span>的结果</span>
                        </div>
                    </div>

                    <?php if ($this->have()) : ?>
                        <ul class="joe_archive__list joe_list" data-wow="<?php $this->options->JList_Animate() ?>">
                            <?php while ($this->next()) : ?>
                                <li class="joe_list__item wow">
                                    <div class="line"></div>
                                    <a href="<?php $this->permalink() ?>" class="thumbnail" title="<?php $this->title() ?>">
                                        <img onerror="javascript: this.src='<?php _getLazyload() ?>';" class="lazyload" src="<?php _getLazyload() ?>" data-original="<?php _getThumbnail($this) ?>" alt="<?php $this->title() ?>" />
                                        <time datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y-m-d'); ?></time>
                                        <svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                            <path d="M903.93077753 107.30625876H115.78633587C64.57261118 107.30625876 22.58166006 149.81138495 22.58166006 201.02510964v624.26547214c0 51.7240923 41.99095114 93.71694641 93.71694641 93.7169464h788.14444164c51.7202834 0 93.71694641-41.99285557 93.71694642-93.7169464v-624.26547214c-0.51227057-51.21372469-43.01739676-93.71885088-94.229217-93.71885088zM115.78633587 171.8333054h788.65671224c16.385041 0 29.70407483 13.31522639 29.70407484 29.70407482v390.22828696l-173.60830179-189.48107072c-12.80486025-13.82749697-30.21634542-21.50774542-48.14010264-19.97093513-17.92375723 1.02073227-34.82106734 10.75387344-46.60138495 26.11437327l-172.58185762 239.1598896-87.06123767-85.52061846c-12.28878076-11.78222353-27.65308802-17.92375723-44.03812902-17.92375577-16.3907529 0.50846167-31.75506163 7.67644101-43.52966736 20.48129978L86.59453164 821.70468765V202.04965083c-1.02454117-17.41529409 12.80486025-30.73052046 29.19180423-30.21634543zM903.93077753 855.50692718H141.90642105l222.25496164-245.81940722 87.0593347 86.03669649c12.80105134 12.80676323 30.21253651 18.95020139 47.11555999 17.4172 17.40958218-1.53871621 33.79652618-11.26614404 45.06267018-26.11818071l172.58376063-238.64762047 216.11152349 236.08817198 2.05098681-1.54062067v142.87778132c0.50846167 16.3907529-13.31522639 29.70597929-30.21444096 29.70597928z m0 0" p-id="1916"></path>
                                            <path d="M318.07226687 509.82713538c79.88945091 0 144.41649754-65.03741277 144.41649754-144.41649753 0-79.37718032-64.52704663-144.92495923-144.41649754-144.92495922-79.89135536 0-144.41649754 64.52704663-144.41649756 144.41268862 0 79.89135536 64.52514218 144.92876814 144.41649756 144.92876813z m0-225.3266807c44.55230407 0 80.91208763 36.36168802 80.91208762 80.91018317 0 44.55611297-35.84751297 81.43007159-80.91208762 81.43007012-45.06838356 0-80.91589654-36.35978356-80.91589508-80.91589507 0-44.55611297 36.87205415-81.42435823 80.91589508-81.42435822z m0 0" p-id="1917"></path>
                                        </svg>
                                    </a>
                                    <div class="information">
                                        <a href="<?php $this->permalink() ?>" class="title" title="<?php $this->title() ?>">
                                            <h6><?php $this->title() ?></h6>
                                        </a>
                                        <a class="abstract" href="<?php $this->permalink() ?>" title="文章摘要"><?php _getAbstract($this) ?></a>
                                        <div class="meta">
                                            <ul class="items">
                                                <li><?php $this->date('Y年m月d日'); ?></li>
                                                <li><?php _getViews($this) ?> 阅读</li>
                                                <li><?php $this->commentsNum('%d'); ?> 评论</li>
                                                <li><?php _getAgree($this) ?> 点赞</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php else : ?>
                        <div class="joe_archive__empty">
                            <svg class="joe_archive__empty-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="120" height="120">
                                <path d="M483.322464 136.980228l-2.079821-116.501988A19.278343 19.278343 0 0 1 499.265094 0h2.511785c12.438931 0.103991 22.57406 10.063135 22.57406 22.430072l4.047652 114.446165a22.702049 22.702049 0 0 1-22.606058 22.430073c-10.135129-1.951832-22.478068-10.079134-22.478068-22.326082h0.015999z m165.033818 16.942544c-8.751248 8.695253-23.27 5.847497-32.045246 0a22.638055 22.638055 0 0 1 0-31.701275L700.799775 44.156205a23.006023 23.006023 0 0 1 31.933256 0c8.759247 8.703252 8.759247 23.118013 0 28.957512l-84.376749 80.793057z m-287.215318 0L276.772215 73.001726c-8.767247-5.8235-8.767247-20.13427 0-28.949512a23.006023 23.006023 0 0 1 31.917257 0l84.496739 78.057292a22.606057 22.606057 0 0 1 0 31.701276c-8.775246 5.943489-23.278 8.799244-32.045247 0.11199z m488.686004 679.44561v9.839155l-8.871238 3.663685-306.237682 125.429221-5.759505 2.639773V645.00057l9.903149 17.150526 60.282819 105.062972c2.775761 4.591605 7.735335 7.32737 13.03088 7.32737a14.878721 14.878721 0 0 0 7.951317-2.055823l230.04423-114.438166v175.312934h-0.327971l-0.015999 0.007999z m-671.486294 13.50284l-9.439189-3.655686V654.823726l0.447962 0.455961 236.395684 117.085938c2.535782 1.143902 5.183555 1.823843 7.959316 2.047824a17.150526 17.150526 0 0 0 14.158784-7.759333l59.714868-104.61501 9.919147-17.158525v332.579419l-13.15087-5.279547-306.005702-125.31723z m-21.99811-415.308309l4.719595-8.799244 323.412206 162.850005 4.839585 2.615775-2.759763 4.695597-77.569334 138.93206-2.655772 4.239636-4.719594-2.055824L77.14937 572.662787l5.887494-10.399107 73.297701-130.708767h0.007999z m328.587762-126.917094l12.558921-4.119645v251.882353h-6.335456l-1.607861-1.023912-295.062643-147.867292 9.919147-3.663685 280.527892-95.207819z m328.715751 95.783769l14.174782 4.695597-291.48695 146.707392-7.375366 3.663685V303.053956l5.303544 1.599863L813.654077 400.445587v-0.015999z m122.173501 161.826093l7.367367 13.50284-320.292475 159.306309-4.847583 2.055824-2.519784-4.119646-77.113373-139.508011-2.527783-4.687597 4.703596-2.639774 318.132661-159.18632 2.191811 3.663686 74.921562 131.620688h-0.015999z m49.09978 12.462929l-100.055401-177.384756v-1.015913a16.046621 16.046621 0 0 0-6.775418-7.32737L519.039395 255.194069l-1.039911-0.559952-1.031911-0.46396a14.966714 14.966714 0 0 0-7.967315-2.175813 13.710822 13.710822 0 0 0-7.839327 2.175813l-1.023912 0.46396-1.143901 0.559952-357.881245 134.252463c-3.855669 2.079821-7.10339 5.11956-9.455187 8.815242L31.617283 576.782433a19.414332 19.414332 0 0 0 8.879237 24.957855l81.249017 40.052558 8.431276 4.231636v207.150198a18.910375 18.910375 0 0 0 10.479099 17.150526l358.449196 151.418988c2.991743 1.487872 6.223465 2.159814 9.439189 2.159814 3.247721 0 6.479443-0.671942 9.455187-2.159814l356.497364-151.986939h1.039911a18.022451 18.022451 0 0 0 11.990969-17.158525V644.41662l7.839326-4.127645 78.593246-40.156549 3.231723-1.503871 3.007741-2.047824a15.806642 15.806642 0 0 0 4.719594-21.87012v0.007999z"></path>
                            </svg>
                            <span>没有找到相关结果...</span>
                        </div>
                    <?php endif; ?>
                </div>
                <?php $this->pageNav(
                    '<svg class="icon icon-prev" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="12" height="12"><path d="M822.272 146.944l-396.8 396.8c-19.456 19.456-51.2 19.456-70.656 0-18.944-19.456-18.944-51.2 0-70.656l396.8-396.8c19.456-19.456 51.2-19.456 70.656 0 18.944 19.456 18.944 45.056 0 70.656z" fill="" p-id="9417"></path><path d="M745.472 940.544l-396.8-396.8c-19.456-19.456-19.456-51.2 0-70.656 19.456-19.456 51.2-19.456 70.656 0l403.456 390.144c19.456 25.6 19.456 51.2 0 76.8-26.112 19.968-51.712 19.968-77.312 0.512zM181.248 877.056c0-3.584 0-7.68 0.512-11.264h-0.512V151.552h0.512c-0.512-3.584-0.512-7.168-0.512-11.264 0-43.008 21.504-78.336 48.128-78.336s48.128 34.816 48.128 78.336c0 3.584 0 7.68-0.512 11.264h0.512V865.792h-0.512c0.512 3.584 0.512 7.168 0.512 11.264 0 43.008-21.504 78.336-48.128 78.336s-48.128-35.328-48.128-78.336z"></path></svg>',
                    '<svg class="icon icon-next" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="12" height="12"><path d="M822.272 146.944l-396.8 396.8c-19.456 19.456-51.2 19.456-70.656 0-18.944-19.456-18.944-51.2 0-70.656l396.8-396.8c19.456-19.456 51.2-19.456 70.656 0 18.944 19.456 18.944 45.056 0 70.656z" fill="" p-id="9417"></path><path d="M745.472 940.544l-396.8-396.8c-19.456-19.456-19.456-51.2 0-70.656 19.456-19.456 51.2-19.456 70.656 0l403.456 390.144c19.456 25.6 19.456 51.2 0 76.8-26.112 19.968-51.712 19.968-77.312 0.512zM181.248 877.056c0-3.584 0-7.68 0.512-11.264h-0.512V151.552h0.512c-0.512-3.584-0.512-7.168-0.512-11.264 0-43.008 21.504-78.336 48.128-78.336s48.128 34.816 48.128 78.336c0 3.584 0 7.68-0.512 11.264h0.512V865.792h-0.512c0.512 3.584 0.512 7.168 0.512 11.264 0 43.008-21.504 78.336-48.128 78.336s-48.128-35.328-48.128-78.336z"></path></svg>',
                    1,
                    '...',
                    array(
                        'wrapTag' => 'ul',
                        'wrapClass' => 'joe_pagination',
                        'itemTag' => 'li',
                        'textTag' => 'a',
                        'currentClass' => 'active',
                        'prevClass' => 'prev',
                        'nextClass' => 'next'
                    )
                );
                ?>
            </div>
            <?php $this->need('public/aside.php'); ?>
        </div>
        <?php $this->need('public/footer.php'); ?>
    </div>
</body>

</html>