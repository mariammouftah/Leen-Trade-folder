(function(){
  var root = document.querySelector('.leen-site');
  if (!root) return;

  // ===================== I18N (client-side) =====================
  var I18N = { ar: {
  "skip": "تخطّي إلى المحتوى",
  "topbar.cities": "صيدا، لبنان · دوالا، الكاميرون",
  "topbar.hours": "الإثنين–الجمعة · <bdi>08:00–18:00</bdi>",
  "topbar.whatsapp": "تواصل عبر واتساب",
  "nav.home": "الرئيسية",
  "nav.about": "عن الشركة",
  "nav.services": "خدماتنا",
  "nav.products": "منتجاتنا",
  "nav.markets": "أسواقنا",
  "nav.distribution": "التوزيع",
  "nav.contact": "تواصل معنا",
  "cta.rfq": "اطلب عرض سعر",
  "hero.badge": "تأسست عام 2014 · لبنان والكاميرون",
  "hero.title1": "تغليف وتوريد صناعي بالجملة.",
  "hero.title2": "لبنان والكاميرون.",
  "hero.lead": "استيراد، تصدير، وتوزيع B2B لتغليف الأطعمة، المنتجات ذات الاستعمال الواحد، والمواد الصناعية &mdash; لتجّار الجملة، المطاعم، والمصانع.",
  "hero.cta1": "اطلب عرض سعر",
  "hero.cta2": "استعرض المنتجات",
  "qabout.eyebrow": "من نحن",
  "qabout.title": "عنّا",
  "qabout.lead": "شركة لين تريد ش.م.م. هي شركة جملة وتوزيع لبنانية-كاميرونية تأسّست عام 2014، تورّد تغليف الأطعمة، المنتجات ذات الاستعمال الواحد، لفائف الجامبو، والمواد الصناعية للمشترين B2B عبر المنطقة.",
  "qabout.cta": "اقرأ قصّتنا",
  "trust.t1": "سنوات من الخبرة",
  "trust.t2": "أسواق نخدمها",
  "trust.t3": "عملاء B2B",
  "trust.t4": "صنف في الكتالوج",
  "prod.eyebrow": "فئات المنتجات",
  "prod.title": "ماذا نورّد",
  "prod.lead": "من تغليف الأطعمة والاستعمال الواحد إلى لفائف الجامبو والتوريدات الصناعية — نخزّن ونورّد الفئات التي تحافظ على عمل تجّار الجملة، المطاعم، الأسواق الكبرى، المصانع، ومشغّلي HoReCa.",
  "prod.c1": "تغليف الأطعمة",
  "prod.c2": "منتجات استعمال واحد",
  "prod.c3": "لفائف جامبو",
  "prod.c4": "مواد صناعية",
  "prod.explore": "استعرض المنتجات",
  "svc.eyebrow": "خدماتنا",
  "svc.title": "كيف نسلّم",
  "svc.s1.t": "التوريد",
  "svc.s1.d": "مصانع مفحوصة مسبقاً عبر المنطقة لجودة وتوريد ثابتَين.",
  "svc.s2.t": "التجميع",
  "svc.s2.d": "تحميل حاويات بأصناف متعدّدة لتعظيم كلّ شحنة.",
  "svc.s3.t": "اللوجستيات",
  "svc.s3.d": "شحن بحري وبرّي، جمارك، ومعالجة وثائق متكاملة.",
  "svc.s4.t": "التخزين",
  "svc.s4.d": "بضاعة جاهزة في لبنان — شحن عند الطلب للمشترين B2B.",
  "mkt.eyebrow": "أسواقنا",
  "mkt.title": "أين نعمل",
  "mkt.lb": "لبنان",
  "mkt.cm": "الكاميرون",
  "mkt.eg": "مصر",
  "mkt.jo": "الأردن",
  "mkt.sa": "المملكة العربية السعودية",
  "mkt.ua": "أوكرانيا",
  "why.eyebrow": "لماذا يختارنا المشترون",
  "why.title": "مصمّمة لمشتري B2B",
  "why.r1.t": "مصانع مفحوصة مسبقاً",
  "why.r1.d": "كلّ مورّد يُدقَّق ويُؤهَّل قبل دخول شبكتنا — جودة ثابتة، بلا مفاجآت.",
  "why.r2.t": "تسعير على أساس الحاوية",
  "why.r2.d": "نتفاوض بحجم الحاوية الكاملة ونمرّر الاقتصاد مباشرة لمشتري الجملة.",
  "why.r3.t": "وثائق منجزة بدقّة",
  "why.r3.d": "الأوراق الجمركية، الشهادات، ووثائق التجارة مُعدّة بنظافة — الشحنات تمرّ بلا تأخير.",
  "hero.stat4.l": "عملاء B2B",
  "hero.scroll": "تابع",
  "pillar.tag1": "الركيزة 01",
  "pillar.t1": "استيراد وتصدير",
  "pillar.d1": "توريد وتجارة عبر الحدود بين لبنان والكاميرون والأسواق الشريكة في بلاد الشام، الخليج، أوروبا، وأفريقيا.",
  "pillar.tag2": "الركيزة 02",
  "pillar.t2": "شبكة توزيع",
  "pillar.d2": "تسليم B2B منظّم في لبنان من خلال البضاعة الجاهزة، تخطيط المسارات، وأسطول توزيع خاص.",
  "pillar.tag3": "الركيزة 03",
  "pillar.t3": "توريد جملة",
  "pillar.d3": "أسعار جملة تنافسية لتجّار الجملة، المطاعم، الأسواق الكبرى، المتاجر، المصانع، ومشغّلي HoReCa.",
  "pillar.tag4": "الركيزة 04",
  "pillar.t4": "تغليف ومواد صناعية",
  "pillar.d4": "مجموعة عملية من تغليف الأطعمة، الاستعمال الواحد، لفائف جامبو، علب البيتزا، علب الصلصة، الأغلفة، الشرائط، ومنتجات التوريد الصناعي.",
  "sectors.label": "القطاعات التي نخدمها",
  "sectors.fb": "أغذية ومشروبات",
  "sectors.pack": "تغليف",
  "sectors.horeca": "فنادق، مطاعم، تجزئة",
  "sectors.indus": "توريدات صناعية",
  "about.eyebrow": "عن الشركة",
  "about.title": "شريكك B2B للتوريد في لبنان والكاميرون",
  "about.p1": "شركة لين تريد ش.م.م. هي شركة استيراد، تصدير، جملة، وتوزيع B2B يقع مقرّها الرئيسي في صيدا، لبنان، مع عمليات نشطة في دوالا، الكاميرون.",
  "about.p2": "نساعد الشركات على توريد واستلام منتجات التغليف والتوريد الصناعي التي تحتاجها — بموثوقية، بأسعار تنافسية، وفي الوقت المحدّد. من تغليف الأطعمة والمنتجات ذات الاستعمال الواحد إلى لفائف الجامبو والمواد الصناعية، يخدم فريقنا تجّار الجملة، الموزّعين، المطاعم، الأسواق الكبرى، المصانع، شركات الإطعام، ومورّدي HoReCa.",
  "about.p3": "مع أكثر من عقد من الخبرة التجارية، بضاعة جاهزة في مستودعنا في لبنان، وعملية توزيع منظّمة، لين تريد مبنيّة للشركات التي تحتاج توريداً مستمرّاً — لا تأخير، لا تخمين، لا توريد غير مستقرّ.",
  "about.f1": "استيراد وتصدير",
  "about.f2": "بيع جملة B2B",
  "about.f3": "توزيع ولوجستيات",
  "about.f4": "توريد صناعي",
  "about.f5": "بضاعة جاهزة في لبنان",
  "about.f6": "لبنان والكاميرون",
  "about.badgeNum": "+10 سنوات",
  "about.badgeLabel": "خبرة في التجارة B2B",
  "about.cta": "اطلب عرض جملة",
  "svc.lead": "من التوريد والشحن إلى التخزين والتسليم النهائي، تدعم لين تريد المشترين B2B بحلّ سلسلة توريد متكامل.",
  "svc.bestFor": "الأنسب لـ:",
  "svc.t1": "استيراد وتصدير",
  "svc.d1": "ننسّق التجارة عبر الحدود لتغليف الأطعمة، الاستعمال الواحد، والمواد الصناعية بين لبنان والكاميرون والأسواق الشريكة.",
  "svc.b1": "تجّار الجملة، الموزّعين، المصانع، المستوردين، والمشترين الإقليميين.",
  "svc.t2": "توزيع B2B في لبنان",
  "svc.d2": "تدعم عمليتنا التوزيعية في لبنان التسليم المجدول لتجّار الجملة، الأسواق الكبرى، المطاعم، شركات الإطعام، المصانع، ومورّدي HoReCa.",
  "svc.b2": "الشركات التي تحتاج بضاعة جاهزة وتسليماً موثوقاً.",
  "svc.t3": "توريد تغليف بالجملة",
  "svc.d3": "نورّد منتجات التغليف والاستعمال الواحد بكميات الجملة، بأسعار تنافسية للطلبات المتكرّرة والمشترين بكميات كبيرة.",
  "svc.b3": "المطاعم، علامات التوصيل، المتاجر، الأسواق الكبرى، وموزّعي الجملة.",
  "svc.t4": "تغليف أطعمة واستعمال واحد",
  "svc.d4": "نقدّم منتجات تغليف عملية لعمليات خدمات الطعام والتوصيل، تشمل علب البيتزا، علب الصلصة، صواني الطعام، أوعية الألمنيوم، أكياس الكرافت، الأكواب، الصحون، أدوات الأكل، القفّازات، المناديل، وأكثر.",
  "svc.b4": "HoReCa، مطابخ التوصيل، المخابز، شركات الإطعام، والأسواق الكبرى.",
  "svc.t5": "توريد تغليف صناعي",
  "svc.d5": "نورّد مواد التغليف الصناعي بما فيها أفلام التمدّد، أفلام التقلّص، الربط، الأشرطة اللاصقة، الرغوة الواقية، البطانات الصناعية، وتوريدات المصانع ذات الصلة.",
  "svc.b5": "المصانع، المستودعات، الصنّاع، ومشغّلي الخدمات اللوجستية.",
  "svc.t6": "لوجستيات، شحن، ووثائق",
  "svc.d6": "ندعم تنسيق الشحن البحري والبرّي، الوثائق الجمركية، تحضير الطلبات، ومعالجة التصدير للشحنات B2B.",
  "svc.b6": "المستوردين، المصدّرين، الموزّعين، والشركات التي تتوسّع عبر الأسواق.",
  "prod.placeholder": "الصورة قريباً",
  "prod.inStock": "متوفر في لبنان",
  "prod.cta": "اطلب عرض جملة",
  "prod.cta.pricing": "اطلب التسعير",
  "prod.cat.packaging": "تغليف",
  "prod.cat.foodpack": "تغليف أطعمة",
  "prod.cat.disposables": "استعمال واحد",
  "prod.cat.industrial": "صناعي",
  "prod.p1.t": "لفائف جامبو",
  "prod.p1.d": "لفائف ورق جامبو بجودة صناعية للمطابخ، المصانع، وHoReCa — أحجام وأوزان متعدّدة بكميات جملة.",
  "prod.p2.t": "علب بيتزا",
  "prod.p2.d": "علب بيتزا كرتون مضلّع بأحجام قياسية وحسب الطلب — سادة أو مطبوعة، بأسعار جملة للمطاعم والعلامات.",
  "prod.p3.t": "علب صلصة بأغطية",
  "prod.p3.d": "علب صلصة بلاستيكية وورقية مع أغطية مطابقة — سعات متعدّدة، مثالية للمطاعم وخدمات التوصيل.",
  "prod.p4.t": "تغليف أطعمة",
  "prod.p4.d": "علب برغر، أكياس كرافت، صواني طعام، أوعية ألمنيوم، طبقات سلطة، وعلب كلامشيل — مجموعة متكاملة لخدمات الطعام.",
  "prod.p5.t": "منتجات استعمال واحد",
  "prod.p5.d": "أكواب، صحون، أدوات أكل، شفاطات، قفّازات، مناديل، أغطية طاولات — أدوات استعمال واحد بكميات جملة لـHoReCa.",
  "prod.p6.t": "مواد تغليف صناعي",
  "prod.p6.d": "فيلم تمدّد، فيلم تقلّص، شرائط ربط، أشرطة لاصقة، رغوة حماية، وبطانات صناعية — توريد مباشر للمصانع.",
  "mkt.lead": "تعمل لين تريد بنموذج ثنائي المركز، يربط البضاعة الجاهزة في لبنان بعمليات تجارية نشطة في الكاميرون وقنوات توريد عبر الأسواق الإقليمية والدولية.",
  "mkt.newBadge": "سوق جديد",
  "mkt.c0.name": "لبنان",
  "mkt.c0.tag": "المقرّ الرئيسي · صيدا",
  "mkt.c0.d": "مستودع، أسطول توزيع، وبضاعة جاهزة تخدم تجّار الجملة والمتاجر والمطاعم والمصانع عبر لبنان.",
  "mkt.c0.note": "مركز المخزون والتوزيع",
  "mkt.c0.m1": "مستودع تخزين",
  "mkt.c0.m2": "أسطول توزيع",
  "mkt.c0.m3": "المقرّ B2B",
  "mkt.corridorsLabel": "ممرّات التوريد والتصدير",
  "mkt.c1.name": "مصر",
  "mkt.c1.tag": "مسار توريد",
  "mkt.c1.d": "تغليف أطعمة، بلاستيك، أكياس، أوعية، أدوات — من مصنّعين مصريين موثوقين.",
  "mkt.c1.note": "شحن بحري",
  "mkt.c2.name": "الأردن",
  "mkt.c2.tag": "شريك تجاري",
  "mkt.c2.d": "تغليف، منتجات بلاستيك زراعي، وأغذية ضمن مسار لبنان–الأردن.",
  "mkt.c2.note": "شحن برّي",
  "mkt.c3.name": "المملكة العربية السعودية",
  "mkt.c3.tag": "سوق تصدير",
  "mkt.c3.d": "بلاستيك منزلي، مواد تغليف، ومنتجات غذائية للموزّعين والمتاجر في السعودية.",
  "mkt.c3.note": "بحر أو برّ",
  "mkt.c4.name": "أوكرانيا",
  "mkt.c4.tag": "مسار توريد",
  "mkt.c4.d": "مواد خام (بوليمرات)، منتجات تغليف، سلع زراعية، ومدخلات صناعية.",
  "mkt.c4.note": "بحراً إلى مرفأ بيروت",
  "mkt.c5.name": "الكاميرون",
  "mkt.c5.tag": "مركز إقليمي · دوالا",
  "mkt.c5.d": "عمليات استيراد وتصدير وتوزيع نشطة في الكاميرون، تخدم أسواق غرب ووسط أفريقيا بمواد تغليف الأطعمة والتوريد الصناعي.",
  "mkt.c5.note": "غرب ووسط أفريقيا",
  "mkt.c5.m1": "غرب ووسط أفريقيا",
  "mkt.c5.m2": "مرفأ دوالا",
  "mkt.c5.m3": "استيراد / تصدير",
  "dist.eyebrow": "التوزيع والتسليم",
  "dist.title": "من مستودعنا إلى بابك",
  "dist.lead": "عمليتنا التوزيعية B2B مصمّمة للسرعة، الدقّة، والتسليم الموثوق — من مخزون المستودع إلى الوجهة النهائية.",
  "dist.s1.t": "مستودع وبضاعة",
  "dist.s1.d": "نحافظ على مخزون جاهز من التغليف، الاستعمال الواحد، والمواد الصناعية في لبنان للإرسال السريع B2B.",
  "dist.s2.t": "تحضير الطلبية",
  "dist.s2.d": "يتمّ تحضير طلبيتك، فحصها، تعبئتها، وتجهيزها على المنصّات بحسب الكمية، الوجهة، ومتطلّبات التسليم.",
  "dist.s3.t": "توزيع بأسطول",
  "dist.s3.d": "أسطول التوصيل الخاص بنا يغطّي لبنان من خلال مسارات مجدولة لتجّار الجملة، الأسواق الكبرى، المطاعم، المصانع، وعملاء HoReCa.",
  "dist.s4.t": "شحن تصديري",
  "dist.s4.d": "للطلبيات الدولية، ننسّق الشحن البحري أو البرّي، الوثائق الجمركية، وتحضير الشحنات للأسواق المختارة.",
  "dist.cta": "خطّط لتسليمي",
  "stock.eyebrow": "بضاعة جاهزة",
  "stock.title": "متوفر في لبنان — شحن فوري.",
  "stock.lead": "مخزون واسع في مستودعنا في صيدا، جاهز للشحن الفوري بالجملة عبر لبنان. أسعار جملة لكلّ الفئات.",
  "stock.cta1": "تحقّق من التوفّر",
  "stock.cta2": "اسأل عبر واتساب",
  "stock.gPackaging": "تغليف الأطعمة",
  "stock.gDisposables": "استعمال واحد وHoReCa",
  "stock.gIndustrial": "توريد صناعي",
  "stock.t1": "لفائف جامبو",
  "stock.t2": "علب بيتزا",
  "stock.t3": "علب صلصة وأغطية",
  "stock.t4": "علب برغر",
  "stock.t5": "أوعية ألمنيوم",
  "stock.t6": "أكياس كرافت",
  "stock.t7": "صواني طعام",
  "stock.t8": "أكواب استعمال واحد",
  "stock.t9": "صحون استعمال واحد",
  "stock.t10": "أدوات أكل",
  "stock.t11": "مناديل",
  "stock.t12": "قفّازات",
  "stock.t13": "فيلم تغليف",
  "stock.t14": "ورق ألمنيوم",
  "stock.t15": "فيلم تمدّد",
  "stock.t16": "شرائط صناعية",
  "stock.t17": "أكياس قمامة",
  "stock.t18": "أغطية طاولات",
  "why.t1": "مركزان عمليّان",
  "why.d1": "قواعد تشغيل في لبنان والكاميرون — تربط بلاد الشام، الخليج، أوروبا، وغرب ووسط أفريقيا.",
  "why.t2": "بضاعة جاهزة في لبنان",
  "why.d2": "مستودع متجدّد باستمرار من التغليف، الاستعمال الواحد، والتوريدات الصناعية — متوفّر للشحن الفوري.",
  "why.t3": "أسعار جملة",
  "why.d3": "توريد مباشر وشحن مجمّع يقدّمان أسعار جملة تنافسية باستمرار للمشترين B2B.",
  "why.t4": "توزيع موثوق",
  "why.d4": "أسطول خاص، مسارات مخطّطة، وتسليم في الوقت — مبنيّ على علاقات طويلة الأمد مع عملاء B2B.",
  "why.t5": "معايير جودة",
  "why.d5": "موردون موثوقون وشهادات ملاءمة غذائية — كلّ شحنة مدقّقة وفق معايير واضحة.",
  "why.t6": "دعم حساب مخصّص",
  "why.d6": "نقطة اتصال واحدة للطلبات، الوثائق، الجمارك، وما بعد البيع — بالإنكليزية، العربية، والفرنسية.",
  "rfq.eyebrow": "طلب عرض سعر",
  "rfq.title": "اطلب عرض جملة",
  "rfq.sub": "أخبرنا بحاجاتك. سيقوم فريق المبيعات بمراجعة طلبك وإعداد عرض سعر B2B.",
  "rfq.lead": "لحمولات الحاويات، التوريد المتكرّر، كميات الجملة الكبيرة، واستفسارات التصدير، شاركنا تفاصيل المنتج والوجهة لنرسل لك تسعيراً دقيقاً وتوافراً.",
  "rfq.helper": "<strong>لتسعير أسرع</strong>، أرفق حجم المنتج، الكمية، المادة، مدينة التسليم، وما إذا كنت تحتاج تغليفاً عادياً أو مطبوعاً مخصّصاً.",
  "rfq.f.container": "تصدير / حمولة حاوية",
  "rfq.f.other": "أخرى",
  "ind.eyebrow": "القطاعات التي نخدمها",
  "ind.title": "نزوّد الشركات في خدمات الطعام، التجزئة، والصناعة",
  "ind.t1": "أغذية ومشروبات",
  "ind.d1": "تغليف، استعمال واحد، وتوريدات بيع جاهز للمطاعم، المخابز، المقاهي، مطابخ التوصيل، وشركات الإطعام.",
  "ind.t2": "HoReCa",
  "ind.d2": "توريد جملة للفنادق، المطاعم، مشغّلي الإطعام، مورّدي الفعاليات، والمشترين في قطاع الضيافة.",
  "ind.t3": "تجزئة وأسواق كبرى",
  "ind.d3": "تغليف ومنتجات استعمال واحد لرفوف التجزئة، عمليات الأسواق الكبرى، وفرق الشراء بكميات كبيرة.",
  "ind.t4": "مصانع ومستودعات",
  "ind.d4": "تغليف صناعي، شرائط، أفلام، أغلفة، بطانات، ومواد للتخزين، الإنتاج، والشحن.",
  "ind.t5": "تجّار جملة وموزّعون",
  "ind.d5": "توريد بكميات الجملة للبيع، التوزيع الإقليمي، والشراء المتكرّر.",
  "faq.eyebrow": "الأسئلة الشائعة",
  "faq.title": "الأسئلة الأكثر طرحاً",
  "faq.lead": "إجابات سريعة عن توريد الجملة، التوزيع، والعمليات B2B في لين تريد.",
  "faq.q1": "ماذا تورّد شركة لين تريد؟",
  "faq.a1": "تورّد لين تريد تغليف الأطعمة بالجملة، المنتجات ذات الاستعمال الواحد، لفائف الجامبو، علب البيتزا، علب الصلصة، تغليف خدمات الطعام، ومواد التغليف الصناعي.",
  "faq.q2": "أين تقع لين تريد؟",
  "faq.a2": "يقع مقرّ لين تريد الرئيسي في صيدا، لبنان، مع عمليات نشطة في دوالا، الكاميرون.",
  "faq.q3": "هل تقدّم لين تريد أسعار جملة؟",
  "faq.a3": "نعم. تركّز لين تريد على توريد الجملة B2B لتجّار الجملة، المطاعم، الأسواق الكبرى، المصانع، الموزّعين، وأعمال HoReCa.",
  "faq.q4": "هل يمكنني طلب عرض سعر عبر الإنترنت؟",
  "faq.a4": "نعم. يمكنك طلب عرض سعر من خلال نموذج الموقع أو التواصل مباشرة مع الفريق عبر واتساب.",
  "faq.q5": "هل توصّل لين تريد في كلّ لبنان؟",
  "faq.a5": "نعم. لدى لين تريد عملية توزيع في لبنان تشمل مخزون المستودع، تحضير الطلبيات، والتسليم بالأسطول.",
  "faq.q6": "هل تتعامل لين تريد مع الاستيراد والتصدير؟",
  "faq.a6": "نعم. تدعم لين تريد الاستيراد، التصدير، تنسيق الشحن، والوثائق للأسواق الإقليمية والدولية المختارة.",
  "faq.q7": "ما المنتجات المتوفّرة عادة في لبنان؟",
  "faq.a7": "تشمل فئات المخزون الشائعة لفائف جامبو، علب بيتزا، علب صلصة وأغطية، علب برغر، أوعية ألمنيوم، أكياس كرافت، أكواب، صحون، أدوات أكل، مناديل، قفّازات، فيلم تغليف، ورق ألمنيوم، فيلم تمدّد، شرائط صناعية، وأكياس قمامة.",
  "faq.q8": "من يمكنه الشراء من لين تريد؟",
  "faq.a8": "تخدم لين تريد عملاء B2B مثل تجّار الجملة، الموزّعين، المطاعم، الأسواق الكبرى، المتاجر، المصانع، شركات الإطعام، ومشغّلي HoReCa.",
  "mcta.quote": "عرض سعر",
  "mcta.wa": "واتساب",
  "mcta.call": "اتصل الآن",
  "footer.faq": "الأسئلة الشائعة",
  "rfq.f.name": "الاسم الكامل *",
  "rfq.f.company": "الشركة *",
  "rfq.f.email": "البريد الإلكتروني *",
  "rfq.f.phone": "الهاتف / واتساب *",
  "rfq.f.country": "البلد *",
  "rfq.f.category": "فئة المنتج *",
  "rfq.f.select": "— اختر الفئة —",
  "rfq.f.mixed": "مختلط / فئات متعدّدة",
  "rfq.f.qty": "الكمية التقديرية",
  "rfq.f.dest": "وجهة التسليم",
  "rfq.f.notes": "التفاصيل / المواصفات",
  "rfq.note": "بالإرسال، توافق على التواصل من قبل فريق المبيعات لدينا.",
  "rfq.submit": "إرسال الطلب",
  "rfq.wa": "تفضّل واتساب؟ أرسل عبر الدردشة",
  "contact.eyebrow": "تواصل معنا",
  "contact.title": "لنتحدّث عن توريدات الجملة.",
  "contact.lead": "سواء كنت تبحث عن موردين موثوقين، شريك توزيع في لبنان، أو خطط استيراد/تصدير من الكاميرون — فريقنا جاهز.",
  "contact.phoneLabel": "اتصل بنا",
  "contact.waLabel": "واتساب",
  "contact.waNote": "الردّ الأسرع · 7 أيام",
  "contact.emailLabel": "البريد الإلكتروني",
  "contact.emailNote": "عروض الأسعار واستفسارات B2B",
  "contact.officeLabel": "مكاتبنا",
  "contact.offices1": "صيدا، لبنان",
  "contact.offices2": "دوالا، الكاميرون",
  "contact.cta": "اطلب عرض سعر",
  "footer.about": "مورّد جملة لبناني-كاميروني B2B — تغليف أطعمة، استعمال واحد، ومواد صناعية عبر بلاد الشام وأفريقيا.",
  "footer.wa": "تواصل عبر واتساب",
  "footer.company": "الشركة",
  "footer.services": "خدماتنا",
  "footer.products": "منتجاتنا",
  "footer.offices": "مكاتبنا",
  "footer.why": "لماذا لين تريد",
  "footer.lebDesc": "المقرّ الرئيسي · مستودع · أسطول توزيع",
  "footer.cmrDesc": "مركز إقليمي · غرب ووسط أفريقيا",
  "footer.copy": "جميع الحقوق محفوظة.",
  "footer.tag": "استيراد · تصدير · توزيع · جملة · توريد صناعي",
  "cta.eyebrow": "جاهز للتوريد؟",
  "cta.title": "لنتحدّث عن توريدات الجملة.",
  "cta.lead": "أرسل لنا قائمة منتجاتك، الكميات، والوجهة. سنعود إليك بالتسعير والتوفّر.",
  "cta.btn1": "اطلب عرض سعر",
  "about.cta.btn": "اطلب عرض سعر",
  "about.cta.title": "جاهز للعمل مع شريك جملة موثوق؟",
  "story.eyebrow": "قصّتنا",
  "story.title": "من صيدا، إلى أفق أوسع.",
  "story.p1": "تأسّست شركة لين تريد عام 2014 في صيدا، لبنان، بقناعة بسيطة: المشترون B2B عبر المنطقة يستحقّون شريكاً لتوريد التغليف والمواد الصناعية يمكن الاعتماد عليه — لا الجري وراءه.",
  "story.p2": "ما بدأ كمكتب تجاري صغير نما إلى عملية جملة وتوزيع متكاملة، بمستودع وأسطول خاصّ في لبنان ومركز إقليمي نشط في دوالا، الكاميرون — يربط التوريد الشامي بالطلب في غرب ووسط أفريقيا.",
  "story.p3": "بعد عقد من الزمن، نخدم مئات العملاء B2B عبر ستة أسواق — مطاعم، أسواق كبرى، مصانع، وموزّعون يريدون توريداً يمكنهم التخطيط حوله.",
  "mission.eyebrow": "الرسالة",
  "mission.title": "ما الذي نقدّمه اليوم",
  "mission.lead": "تزويد المشترين B2B عبر لبنان والكاميرون والمنطقة الأوسع بتغليف الأطعمة، المنتجات ذات الاستعمال الواحد، لفائف الجامبو، والمواد الصناعية — مدعومين بمصانع مفحوصة مسبقاً، تسعير بحجم الحاوية، ووثائق نظيفة.",
  "vision.eyebrow": "الرؤية",
  "vision.title": "إلى أين نمضي",
  "vision.lead": "أن نصبح منصّة التوزيع B2B المرجعية التي تربط المتوسّط وأفريقيا — الحلقة الوسطى الموثوقة بين المصنّعين في ممرّات التوريد لدينا والطلب المتنامي للجملة عبر بلاد الشام، الخليج، وغرب ووسط أفريقيا.",
  "values.eyebrow": "قيمنا",
  "values.title": "كيف نعمل",
  "values.v1.t": "الموثوقية",
  "values.v1.d": "نلتزم بالتواريخ، الكمّيات، والجودة — ونحاسب أنفسنا عليها، حاوية بعد حاوية.",
  "values.v2.t": "الشفافية",
  "values.v2.d": "تسعير واضح، وثائق واضحة، جداول زمنية واضحة. تعرف دائماً أين يقف طلبك وكم يكلّف.",
  "values.v3.t": "الكفاءة",
  "values.v3.d": "التفاوض بحجم الحاوية، تجميع SKU متعدّد، ومخزون جاهز للمستودع يبقي توريدك مرناً وتكاليفك صادقة.",
  "values.v4.t": "شراكة طويلة الأمد",
  "values.v4.d": "نحن هنا للأعمال المتكرّرة — لا الصفقة لمرّة واحدة. أفضل عملائنا معنا منذ خمس، ثماني، عشر سنوات.",
  "loc.lb.name": "صيدا، لبنان",
  "loc.lb.role": "المقرّ الرئيسي · مستودع · أسطول",
  "loc.lb.meta": "الإثنين–الجمعة · <bdi>08:00–18:00</bdi><br>الاستلام من المستودع/المتجر في الغازية أو صيدا.",
  "loc.cm.name": "دوالا، الكاميرون",
  "loc.cm.role": "مركز إقليمي · غرب ووسط أفريقيا",
  "loc.cm.meta": "توزيع إلى ممرّات الأعمال في وسط وغرب أفريقيا. بموعد مسبق.",
  "mkt.featured.eyebrow": "مراكز مميّزة",
  "mkt.featured.title": "مركزانا التشغيليان",
  "mkt.active.eyebrow": "أسواق نشطة",
  "mkt.active.title": "أربعة ممرّات نتعامل عبرها",
  "mkt.cta.eyebrow": "ابدأ الآن",
  "mkt.cta.title": "تحتاج توريداً في أحد أسواقنا النشطة؟",
  "mkt.cta.lead": "أخبرنا بوجهتك، نوع المنتج، والكمية. سنعود إليك بالتسعير ومدّة التسليم.",
  "mkt.cta.btn": "اطلب عرض سعر",
  "mkt.lb.b1": "توريد تغليف أطعمة للمطاعم والأسواق الكبرى والموزّعين",
  "mkt.lb.b2": "منتجات استعمال واحد ولفائف جامبو لمشتري الأعمال",
  "mkt.lb.b3": "تسليم محلّي وتنسيق مخزون",
  "mkt.lb.f1l": "نعمل منذ",
  "mkt.lb.f1v": "2014",
  "mkt.lb.f2l": "المكتب الرئيسي",
  "mkt.lb.f2v": "صيدا",
  "mkt.lb.f3l": "التغطية",
  "mkt.lb.f3v": "لبنان / بلاد الشام",
  "mkt.cm.b1": "توريد بكميات الحاويات للموزّعين والمحوّلين",
  "mkt.cm.b2": "تغليف أطعمة ومنتجات استعمال واحد لمشتري HoReCa",
  "mkt.cm.b3": "توزيع عبر الحدود في CEMAC وECOWAS",
  "mkt.cm.f1l": "ناشط منذ",
  "mkt.cm.f1v": "2023",
  "mkt.cm.f2l": "المركز الرئيسي",
  "mkt.cm.f2v": "دوالا",
  "mkt.cm.f3l": "التغطية",
  "mkt.cm.f3v": "وسط وغرب أفريقيا",
  "mkt.eg.b1": "توريد جملة للمحوّلين وموزّعي السلع الاستهلاكية",
  "mkt.eg.b2": "حاويات بلاستيكية، أكياس، ومنتجات استعمال واحد",
  "mkt.eg.b3": "حمولات حاويات بحرية من الإسكندرية",
  "mkt.eg.f1l": "الدور",
  "mkt.eg.f1v": "ممرّ توريد",
  "mkt.eg.f2l": "المرفأ",
  "mkt.eg.f2v": "الإسكندرية",
  "mkt.eg.f3l": "الوسيلة",
  "mkt.eg.f3v": "شحن بحري",
  "mkt.jo.b1": "تغليف ومنتجات استعمال واحد بدرجة HoReCa",
  "mkt.jo.b2": "توريد تغليف أطعمة للموزّعين",
  "mkt.jo.b3": "طلبيات بالجملة إلى عمّان والعقبة",
  "mkt.jo.f1l": "الدور",
  "mkt.jo.f1v": "شريك تجاري",
  "mkt.jo.f2l": "المدن",
  "mkt.jo.f2v": "عمّان، العقبة",
  "mkt.jo.f3l": "الوسيلة",
  "mkt.jo.f3v": "شحن برّي",
  "mkt.sa.b1": "تغليف بالجملة للموزّعين والأسواق الكبرى",
  "mkt.sa.b2": "مواد صناعية للمحوّلين والمصانع",
  "mkt.sa.b3": "شحنات بحجم الحاوية إلى المناطق التجارية الرئيسية",
  "mkt.sa.f1l": "الدور",
  "mkt.sa.f1v": "سوق تصدير",
  "mkt.sa.f2l": "المناطق",
  "mkt.sa.f2v": "الرياض، جدّة، الدمّام",
  "mkt.sa.f3l": "الوسيلة",
  "mkt.sa.f3v": "بحراً أو برّاً",
  "mkt.ua.b1": "حبيبات بوليمر ومدخلات صناعية خام",
  "mkt.ua.b2": "تغليف محوَّل وركائز",
  "mkt.ua.b3": "شحن حاويات إلى مرفأ بيروت",
  "mkt.ua.f1l": "الدور",
  "mkt.ua.f1v": "ممرّ توريد",
  "mkt.ua.f2l": "المرفأ",
  "mkt.ua.f2v": "بيروت",
  "mkt.ua.f3l": "الوسيلة",
  "mkt.ua.f3v": "شحن بحري",
  "page.about.crumb": "من نحن",
  "page.about.h1": "عن شركة لين تريد",
  "page.about.intro": "شركة جملة وتوزيع لبنانية-كاميرونية تأسّست عام 2014.",
  "page.contact.crumb": "تواصل",
  "page.contact.h1": "تواصل معنا",
  "page.contact.intro": "تحدّث إلى فريق المبيعات — عبر الهاتف، واتساب، البريد الإلكتروني، أو أرسل استفسارك من خلال النموذج أدناه.",
  "page.markets.crumb": "أسواقنا",
  "page.markets.h1": "عمليات تجارة لبنانية-كاميرونية مع تواصل تصديري إقليمي",
  "page.markets.intro": "ستة أسواق نشطة · مركزان تشغيليان · توريد جملة بحجم الحاوية عبر بلاد الشام، الخليج، وأفريقيا.",
  "page.products.crumb": "منتجاتنا",
  "page.products.h1": "تغليف أطعمة بالجملة، استعمال واحد، وتوريدات صناعية",
  "page.products.intro": "أربع فئات · أكثر من 24 خطّ منتج · مخزون وطباعة مخصّصة. نورّد لتجّار الجملة، HoReCa، المصانع، والمحوّلين عبر ستة أسواق.",
  "page.rfq.crumb": "طلب عرض سعر",
  "page.rfq.h1": "اطلب عرض سعر",
  "page.rfq.intro": "أرسل لنا استفسارك. سيقوم فريق المبيعات بمراجعة طلبك والردّ بالتسعير والتوفّر.",
  "page.services.crumb": "خدماتنا",
  "page.services.h1": "خدمات مصمّمة حول عملك",
  "page.services.intro": "توريد جملة، تنفيذ بالكميّات، تسليم سريع، استلام من المستودع، دعم تجديد المخزون، ومساعدة في عروض الأسعار — مصمّمة بحسب الطريقة التي يعمل بها عملك فعلاً.",
  "prod.cat01.label": "الفئة 01",
  "prod.cat01.h2": "تغليف أطعمة",
  "prod.cat01.intro": "تغليف أوّلي وثانوي للتجزئة، خدمات الطعام، الوجبات الجاهزة، وعمليات السلع الاستهلاكية. مخزون وطباعة مخصّصة.",
  "prod.cat02.label": "الفئة 02",
  "prod.cat02.h2": "منتجات استعمال واحد",
  "prod.cat02.intro": "أدوات استعمال واحد بدرجة HoReCa للمطاعم، المقاهي، الفنادق، شركات الإطعام، وسلاسل الخدمة السريعة.",
  "prod.cat03.label": "الفئة 03",
  "prod.cat03.h2": "لفائف جامبو",
  "prod.cat03.intro": "لفائف أمّ مورَّدة مباشرة من المصنع — للمحوّلين، آلات التقطيع، ومصانع التغليف.",
  "prod.cat04.label": "الفئة 04",
  "prod.cat04.h2": "مواد صناعية",
  "prod.cat04.intro": "مدخلات خام ومستهلكات تحويل تورَّد لمصانع التغليف، مصنّعي السلع الاستهلاكية، والمحوّلين.",
  "prod.s01.t": "حاويات وصواني أطعمة",
  "prod.s01.d": "حاويات PET شفّافة، PP رغوي، وبلاستيك صلب للوجبات الجاهزة، السلطات، المعلّبات، والوجبات السريعة. متوافقة مع الأغطية.",
  "prod.s02.t": "أكياس كرافت ومقاومة للدهون",
  "prod.s02.d": "أكياس كرافت بمقبض ملتوي، مقبض مسطّح، وSOS. بطانات طعام مقاومة للدهون وأكمام للمخابز.",
  "prod.s03.t": "أفلام تغليف ولفائف إغلاق",
  "prod.s03.d": "فيلم PVC لاصق، أفلام إغلاق علوية، وفيلم تمدّد لآلات الصواني وخطوط التعبئة بالتجزئة.",
  "prod.s04.t": "علب مضلّعة ومطبوعة",
  "prod.s04.d": "علب مضلّعة RSC ومقطوعة بالقالب، طباعة فلكسو وأوفست. علب بيتزا، علب التجارة الإلكترونية، علب رئيسية.",
  "prod.s05.t": "حاويات ألمنيوم",
  "prod.s05.d": "حاويات رقائق ألمنيوم بجدار أملس ومتعرّج مع أغطية رقائق وكرتون. مقاسات الإطعام والمخابز.",
  "prod.s06.t": "أكواب ورقية ساخنة وباردة",
  "prod.s06.d": "أكواب ورقية بجدار واحد ومزدوج. طلاءات PE وPLA. طباعة مخصّصة متاحة من 50,000 قطعة.",
  "prod.s07.t": "أطقم أدوات أكل",
  "prod.s07.d": "أدوات أكل خشبية، CPLA، وPP. سكاكين، شوك، ملاعق، وملاعق شوكية. أنماط ملفوفة وغير ملفوفة.",
  "prod.s08.t": "مناديل ومناشف",
  "prod.s08.d": "مناديل من طبقة واحدة إلى أربع طبقات. طيّة موزّع، طيّة عشاء، وأحجام كوكتيل. أبيض ومطبوع بالجملة.",
  "prod.s09.t": "شفاطات",
  "prod.s09.d": "شفاطات ورقية، PLA، ومن طحين الأرز. أحجام كوكتيل، عادي، وجامبو. أنماط ملفوفة وبالجملة.",
  "prod.s10.t": "قفّازات تعامل مع الأطعمة",
  "prod.s10.d": "قفّازات نتريل، فينيل، وPE. خالية من البودرة، زرقاء وشفّافة. علب جملة من 1,000 و10,000.",
  "prod.s11.t": "صحون وأطباق",
  "prod.s11.d": "صحون رغوة، ورق، وقصب السكر. دائرية، بيضاوية، مقسّمة. من الإطعام الاقتصادي إلى HoReCa المميّز.",
  "prod.s12.t": "لفائف تيشو أمّ",
  "prod.s12.d": "تيشو خام وحرّي لمحوّلي المناديل، التواليت، والوجه. درجات بيضاء وطبيعية.",
  "prod.s13.t": "ورق كرافت وMG",
  "prod.s13.d": "كرافت بنّي وأبيض، ورق MG لتحويل الأكياس وتغليف الأطعمة. درجات مبيّضة وغير مبيّضة.",
  "prod.s14.t": "لفائف رقائق ألمنيوم",
  "prod.s14.d": "رقائق منزلية وبدرجة الإطعام. درجات مطلية، عادية، ومصفّحة للتحويل.",
  "prod.s15.t": "أفلام تمدّد وتقلّص",
  "prod.s15.d": "LDPE مصبوب ومنفوخ لخطوط لفّ المنصّات والتقلّص. درجة يدوية وآلية.",
  "prod.s16.t": "ورق مقاوم للدهون وخبز",
  "prod.s16.d": "ورق خبز مطلي بالسيليكون، مقاوم للدهون، وورق الزبدة في لفائف جامبو. درجة مخابز صناعية.",
  "prod.s17.t": "ألواح طيّ",
  "prod.s17.d": "ألواح SBS، FBB، وWLC لعلب الطيّ ومخزون الأكواب. مبيّضة وغير مبيّضة.",
  "prod.s18.t": "حبيبات بوليمر",
  "prod.s18.d": "حبيبات PE، PP، PET، وPS في أكياس 25 كغ وFIBC 1 طنّ. درجات فيلم، حقن، وقولبة بالنفخ.",
  "prod.s19.t": "أحبار فلكسو وغرافور",
  "prod.s19.d": "أحبار مذيبة ومائية للطباعة الفلكسوغرافية والغرافور لركائز التغليف.",
  "prod.s20.t": "لاصقات تصفيح",
  "prod.s20.d": "لاصقات PU بدون مذيب ومذيبة لتصفيح التغليف المرن. أنظمة من جزأين.",
  "prod.s21.t": "شمع بارافين ومتخصّص",
  "prod.s21.d": "شمع بارافين مكرّر بالكامل وشبه مكرّر لتطبيقات الشموع، الألواح، تغليف الأطعمة، ومستحضرات التجميل.",
  "prod.s22.t": "مواد كيميائية أساسية",
  "prod.s22.d": "صودا كاوية، حمض الستريك، بيكربونات الصوديوم، وقواعد أخرى. درجات تقنية وغذائية، براميل وأكياس.",
  "prod.s23.t": "مستهلكات تحويل",
  "prod.s23.d": "نوى، شفرات ضاغطة، منظّفات أنيلوكس، وكيمياء المطابع لخطوط الفلكسو والغرافور.",
  "svc.cta.eyebrow": "ابدأ الآن",
  "svc.cta.title": "جاهز لإعداد توريد الجملة الخاص بك؟",
  "svc.cta.lead": "أخبرنا بما تحتاج وأين تقع. سنعود إليك بالتسعير، التوفّر، وخيارات التسليم.",
  "svc.cta.btn": "اطلب عرض سعر",
  "footer.rights": "© 2026 شركة لين تريد ش.م.م. — جميع الحقوق محفوظة."
} };
  var EN_DEFAULTS = {};
  function captureEnDefaults(){
    document.querySelectorAll('[data-i18n]').forEach(function(el){
      var k = el.getAttribute('data-i18n');
      if (k && !(k in EN_DEFAULTS)) EN_DEFAULTS[k] = el.innerHTML;
    });
    document.querySelectorAll('[data-i18n-placeholder]').forEach(function(el){
      var k = el.getAttribute('data-i18n-placeholder');
      var pk = '__ph__' + k;
      if (k && !(pk in EN_DEFAULTS)) EN_DEFAULTS[pk] = el.getAttribute('placeholder') || '';
    });
    document.querySelectorAll('[data-i18n-aria]').forEach(function(el){
      var k = el.getAttribute('data-i18n-aria');
      var ak = '__aria__' + k;
      if (k && !(ak in EN_DEFAULTS)) EN_DEFAULTS[ak] = el.getAttribute('aria-label') || '';
    });
  }
  function applyLang(lang){
    var dict = (lang === 'ar') ? I18N.ar : null;
    document.querySelectorAll('[data-i18n]').forEach(function(el){
      var k = el.getAttribute('data-i18n');
      if (!k) return;
      if (dict && dict[k] != null) el.innerHTML = dict[k];
      else if (k in EN_DEFAULTS) el.innerHTML = EN_DEFAULTS[k];
    });
    document.querySelectorAll('[data-i18n-placeholder]').forEach(function(el){
      var k = el.getAttribute('data-i18n-placeholder');
      var pk = '__ph__' + k;
      if (!k) return;
      if (dict && dict[k] != null) el.setAttribute('placeholder', dict[k]);
      else if (pk in EN_DEFAULTS) el.setAttribute('placeholder', EN_DEFAULTS[pk]);
    });
    document.querySelectorAll('[data-i18n-aria]').forEach(function(el){
      var k = el.getAttribute('data-i18n-aria');
      var ak = '__aria__' + k;
      if (!k) return;
      if (dict && dict[k] != null) el.setAttribute('aria-label', dict[k]);
      else if (ak in EN_DEFAULTS) el.setAttribute('aria-label', EN_DEFAULTS[ak]);
    });
    var html = document.documentElement;
    html.setAttribute('lang', lang);
    html.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
    // Also set on .leen-site so [dir="rtl"] CSS rules can match — otherwise
    // all the RTL position flips, padding mirrors, FAB swaps etc. never fire
    // and the page ends up with asymmetric whitespace.
    var siteRoot = document.querySelector('.leen-site');
    if (siteRoot) {
      siteRoot.setAttribute('lang', lang);
      siteRoot.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
    }
    document.querySelectorAll('[data-lang]').forEach(function(b){
      b.classList.toggle('is-active', b.getAttribute('data-lang') === lang);
    });
    try { localStorage.setItem('lt-lang', lang); } catch(e) {}
  }
  // Capture EN defaults from server-rendered HTML (kept as a safety net for
  // any data-i18n element that lacks a pre-rendered AR mirror).
  captureEnDefaults();

  // Persist current page language to localStorage so other pages
  // (thanks.html, 404.html) can show the matching language.
  var currentPathLang = window.location.pathname.indexOf('/ar/') === 0
                     || window.location.pathname === '/ar' ? 'ar' : 'en';
  try { localStorage.setItem('lt-lang', currentPathLang); } catch(e) {}

  // Wire language toggle buttons — NAVIGATE between EN/AR URLs instead of
  // swapping content client-side. Google indexes /about/ as English and
  // /ar/about/ as Arabic; hreflang tells it they're translations.
  document.querySelectorAll('[data-lang]').forEach(function(b){
    b.addEventListener('click', function(e){
      e.preventDefault();
      var lang = b.getAttribute('data-lang');
      var path = window.location.pathname;
      // Strip any leading /ar/ or /ar to get the canonical EN path.
      var basePath = path.replace(/^\/ar(\/|$)/, '/');
      // Add /ar prefix when switching to Arabic.
      var targetPath = (lang === 'ar')
        ? (basePath === '/' ? '/ar/' : '/ar' + basePath)
        : basePath;
      // Preserve query string + hash (e.g. anchor like /request-quote/#rfq)
      window.location.href = targetPath + window.location.search + window.location.hash;
    });
  });


  // ===================== REVEAL ON SCROLL =====================
  var reveals = root.querySelectorAll('.lt-reveal:not(.is-visible)');
  if ('IntersectionObserver' in window && reveals.length) {
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(e){
        if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
      });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
    reveals.forEach(function(el){ io.observe(el); });
  } else { reveals.forEach(function(el){ el.classList.add('is-visible'); }); }

  // ===================== COUNTERS =====================
  var counters = root.querySelectorAll('.lt-count');
  function animateCount(el){
    var target = parseInt(el.getAttribute('data-target'), 10) || 0;
    var format = el.getAttribute('data-format');
    var duration = 1400;
    var start = performance.now();
    function tick(now){
      var p = Math.min(1, (now - start) / duration);
      var eased = 1 - Math.pow(1 - p, 3);
      var val = Math.floor(target * eased);
      el.textContent = (format === 'thousand' && val >= 1000) ? val.toLocaleString('en-US') : val;
      if (p < 1) requestAnimationFrame(tick);
      else el.textContent = format === 'thousand' ? target.toLocaleString('en-US') : target;
    }
    requestAnimationFrame(tick);
  }
  if ('IntersectionObserver' in window && counters.length) {
    var io2 = new IntersectionObserver(function(entries){
      entries.forEach(function(e){ if (e.isIntersecting) { animateCount(e.target); io2.unobserve(e.target); } });
    }, { threshold: 0.4 });
    counters.forEach(function(el){ io2.observe(el); });
  } else { counters.forEach(function(el){ animateCount(el); }); }

  // ===================== STICKY NAV + SCROLL-TOP =====================
  var nav = document.getElementById('lt-nav');
  var fabTop = document.getElementById('lt-fab-top');
  var lastY = -1;
  function onScroll(){
    var y = window.scrollY || window.pageYOffset;
    if (y === lastY) return;
    lastY = y;
    if (nav) nav.classList.toggle('is-scrolled', y > 16);
    if (fabTop) fabTop.classList.toggle('is-visible', y > 600);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // ===================== MOBILE MENU =====================
  var mobileLinks = document.querySelectorAll('#lt-mobile-menu a');
  var toggle = document.getElementById('lt-mobile-toggle');
  mobileLinks.forEach(function(a){
    a.addEventListener('click', function(){ if (toggle) toggle.checked = false; });
  });
  if (toggle) {
    toggle.addEventListener('change', function(){
      document.body.style.overflow = toggle.checked ? 'hidden' : '';
    });
  }

  // ===================== RFQ FORM =====================
  function buildRfqBody(){
    var f = document.getElementById('lt-rfq-form');
    if (!f) return '';
    var get = function(id){ var el = document.getElementById(id); return el ? (el.value || '').trim() : ''; };
    return [
      'Name: ' + get('rfq-name'),
      'Company: ' + get('rfq-company'),
      'Email: ' + get('rfq-email'),
      'Phone: ' + get('rfq-phone'),
      'Country: ' + get('rfq-country'),
      'Category: ' + get('rfq-category'),
      'Quantity: ' + get('rfq-quantity'),
      'Destination: ' + get('rfq-destination'),
      '',
      'Details:',
      get('rfq-notes')
    ].join('\n');
  }
  function validateRfq(){
    var required = ['rfq-name','rfq-company','rfq-email','rfq-phone','rfq-country','rfq-category'];
    for (var i=0;i<required.length;i++){
      var el = document.getElementById(required[i]);
      if (!el || !(el.value || '').trim()) {
        if (el) { el.focus(); el.style.borderColor = '#dc2626'; setTimeout(function(e){ e.style.borderColor=''; }, 2000, el); }
        return false;
      }
    }
    return true;
  }
  var rfqForm = document.getElementById('lt-rfq-form');
  if (rfqForm) {
    rfqForm.addEventListener('submit', function(e){
      // Validate before allowing native POST to Web3Forms
      if (!validateRfq()) { e.preventDefault(); return; }
      // Bot trap: if the honeypot checkbox is checked, abort silently
      var honey = document.getElementById('lt-rfq-honey');
      if (honey && honey.checked) { e.preventDefault(); return; }
      // Set a nice subject line from the company name (Web3Forms reads `subject`)
      var subj = document.getElementById('lt-rfq-subject');
      var company = (document.getElementById('rfq-company').value || '').trim();
      if (subj && company) subj.value = 'New RFQ — ' + company;
      // Show "Sending..." state on the submit button
      var btn = rfqForm.querySelector('button[type="submit"]');
      if (btn) {
        btn.disabled = true;
        btn.style.opacity = '0.7';
        btn.style.cursor = 'wait';
      }
      // Let the form POST natively — Web3Forms handles delivery + redirects to `redirect`
    });
  }
  var rfqWa = document.getElementById('lt-rfq-wa');
  if (rfqWa) {
    rfqWa.addEventListener('click', function(){
      if (!validateRfq()) return;
      var text = encodeURIComponent('Hello LEEN TRADE, I would like to request a quotation:\n\n' + buildRfqBody());
      window.open('https://wa.me/96171231843?text=' + text, '_blank', 'noopener');
    });
  }
})();
