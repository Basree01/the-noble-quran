<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QurantextController extends Controller
{
    public function index(){

        

        $ayah1 = 'بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ';
        $ayah2 = 'ٱلْحَمْدُ لِلَّهِ رَبِّ ٱلْعَٰلَمِينَ';
        $ayah3 ='ٱلرَّحْمَٰنِ ٱلرَّحِيمِ';
        $ayah4 ='مَٰلِكِ يَوْمِ ٱلدِّينِ';
        $ayah5 ='إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ';
        $ayah6 ='ٱهْدِنَا ٱلصِّرَٰطَ ٱلْمُسْتَقِيمَ';
        $ayah7 ='صِرَٰطَ ٱلَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ ٱلْمَغْضُوبِ عَلَيْهِمْ وَلَا ٱلضَّآلِّينَ';
        
        return view('home.qurantext', 
         compact('ayah1', 'ayah2', 'ayah3', 'ayah4', 'ayah5', 'ayah6', 'ayah7'));
         

        if($id = 1){

            return view('home.qurantext', 
         compact('ayah1', 'ayah2', 'ayah3', 'ayah4', 'ayah5', 'ayah6', 'ayah7'));

        }else if($id = 2){

            return view('home.text1', 
         compact('ayah1', 'ayah2', 'ayah3', 'ayah4', 'ayah5', 'ayah6', 'ayah7'));
        }
        else
        {
            return view('home.home');
        }
        
    }

    public function show($id){
        

        $ayah1 = 'بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ';
        $ayah2 = 'ٱلْحَمْدُ لِلَّهِ رَبِّ ٱلْعَٰلَمِينَ';
        $ayah3 ='ٱلرَّحْمَٰنِ ٱلرَّحِيمِ';
        $ayah4 ='مَٰلِكِ يَوْمِ ٱلدِّينِ';
        $ayah5 ='إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ';
        $ayah6 ='ٱهْدِنَا ٱلصِّرَٰطَ ٱلْمُسْتَقِيمَ';
        $ayah7 ='صِرَٰطَ ٱلَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ ٱلْمَغْضُوبِ عَلَيْهِمْ وَلَا ٱلضَّآلِّينَ';

        $s2ayah0 = ' بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ';
        $s2ayah1 = ' الم';
        $s2ayah2 = 'ذَٰلِكَ الْكِتَابُ لَا رَيْبَ ۛ فِيهِ ۛ هُدًى لِلْمُتَّقِينَ';
        $s2ayah3 = 'الَّذِينَ يُؤْمِنُونَ بِالْغَيْبِ وَيُقِيمُونَ الصَّلَاةَ وَمِمَّا رَزَقْنَاهُمْ يُنْفِقُونَ';
        $s2ayah4 = 'وَالَّذِينَ يُؤْمِنُونَ بِمَا أُنْزِلَ إِلَيْكَ وَمَا أُنْزِلَ مِنْ قَبْلِكَ وَبِالْآخِرَةِ هُمْ يُوقِنُونَ';
        $s2ayah5 = ' أُولَٰئِكَ عَلَىٰ هُدًى مِنْ رَبِّهِمْ ۖ وَأُولَٰئِكَ هُمُ الْمُفْلِحُونَ';
        $s2ayah6 = 'إِنَّ الَّذِينَ كَفَرُوا سَوَاءٌ عَلَيْهِمْ أَأَنْذَرْتَهُمْ أَمْ لَمْ تُنْذِرْهُمْ لَا يُؤْمِنُونَ';
        $s2ayah7 = 'خَتَمَ اللَّهُ عَلَىٰ قُلُوبِهِمْ وَعَلَىٰ سَمْعِهِمْ ۖ وَعَلَىٰ أَبْصَارِهِمْ غِشَاوَةٌ ۖ وَلَهُمْ عَذَابٌ عَظِيمٌ';
        $s2ayah8 = 'وَمِنَ النَّاسِ مَنْ يَقُولُ آمَنَّا بِاللَّهِ وَبِالْيَوْمِ الْآخِرِ وَمَا هُمْ بِمُؤْمِنِينَ';
        $s2ayah9 = 'يُخَادِعُونَ اللَّهَ وَالَّذِينَ آمَنُوا وَمَا يَخْدَعُونَ إِلَّا أَنْفُسَهُمْ وَمَا يَشْعُرُونَ';
        $s2ayah10 = 'فِي قُلُوبِهِمْ مَرَضٌ فَزَادَهُمُ اللَّهُ مَرَضًا ۖ وَلَهُمْ عَذَابٌ أَلِيمٌ بِمَا كَانُوا يَكْذِبُونَ';
        $s2ayah11 = 'وَإِذَا قِيلَ لَهُمْ لَا تُفْسِدُوا فِي الْأَرْضِ قَالُوا إِنَّمَا نَحْنُ مُصْلِحُونَ';
        $s2ayah12 = 'أَلَا إِنَّهُمْ هُمُ الْمُفْسِدُونَ وَلَٰكِنْ لَا يَشْعُرُونَ';
        $s2ayah13 = 'وَإِذَا قِيلَ لَهُمْ آمِنُوا كَمَا آمَنَ النَّاسُ قَالُوا أَنُؤْمِنُ كَمَا آمَنَ السُّفَهَاءُ ۗ أَلَا إِنَّهُمْ هُمُ السُّفَهَاءُ وَلَٰكِنْ لَا يَعْلَمُونَ';
        $s2ayah14 = 'وَإِذَا لَقُوا الَّذِينَ آمَنُوا قَالُوا آمَنَّا وَإِذَا خَلَوْا إِلَىٰ شَيَاطِينِهِمْ قَالُوا إِنَّامَعَكُمْ إِنَّمَا نَحْنُ مُسْتَهْزِئُونَ';
        $s2ayah15 = 'اللَّهُ يَسْتَهْزِئُ بِهِمْ وَيَمُدُّهُمْ فِي طُغْيَانِهِمْ يَعْمَهُونَ';
        $s2ayah16 = 'أُولَٰئِكَ الَّذِينَ اشْتَرَوُا الضَّلَالَةَ بِالْهُدَىٰ فَمَا رَبِحَتْ تِجَارَتُهُمْ وَمَا كَانُوا مُهْتَدِينَ';
        $s2ayah17 = 'مَثَلُهُمْ كَمَثَلِ الَّذِي اسْتَوْقَدَ نَارًا فَلَمَّا أَضَاءَتْ مَا حَوْلَهُ ذَهَبَ اللَّهُ بِنُورِهِمْ وَتَرَكَهُمْ فِي ظُلُمَاتٍ لَا يُبْصِرُونَ';
        $s2ayah18 = 'صُمٌّ بُكْمٌ عُمْيٌ فَهُمْ لَا يَرْجِعُونَ';
        $s2ayah19 = 'أَوْ كَصَيِّبٍ مِنَ السَّمَاءِ فِيهِ ظُلُمَاتٌ وَرَعْدٌ وَبَرْقٌ يَجْعَلُونَ أَصَابِعَهُمْ فِي آذَانِهِمْ مِنَ الصَّوَاعِقِ حَذَرَ الْمَوْتِ ۚ وَاللَّهُ مُحِيطٌ بِالْكَافِرِينَ';
        $s2ayah20 = 'يَكَادُ الْبَرْقُ يَخْطَفُ أَبْصَارَهُمْ ۖ كُلَّمَا أَضَاءَ لَهُمْ مَشَوْا فِيهِ وَإِذَا أَظْلَمَ عَلَيْهِمْ قَامُوا وَلَوْ شَاءَ اللَّهُ لَذَهَبَ بِسَمْعِهِمْ وَأَبْصَارِهِمْ ۚ إِنَّ اللَّهَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ';
        $s2ayah21 = 'يَا أَيُّهَا النَّاسُ اعْبُدُوا رَبَّكُمُ الَّذِي خَلَقَكُمْ وَالَّذِينَ مِنْ قَبْلِكُمْ لَعَلَّكُمْ تَتَّقُونَ';
        $s2ayah22 = 'الَّذِي جَعَلَ لَكُمُ الْأَرْضَ فِرَاشًا وَالسَّمَاءَ بِنَاءً وَأَنْزَلَ مِنَ السَّمَاءِ مَاءً فَأَخْرَجَ بِهِ مِنَ الثَّمَرَاتِ رِزْقًا لَكُمْ ۖ فَلَا تَجْعَلُوا لِلَّهِ أَنْدَادًا وَأَنْتُمْ تَعْلَمُونَ';
        $s2ayah23 = 'وَإِنْ كُنْتُمْ فِي رَيْبٍ مِمَّا نَزَّلْنَا عَلَىٰ عَبْدِنَا فَأْتُوا بِسُورَةٍ مِنْ مِثْلِهِ وَادْعُوا شُهَدَاءَكُمْ مِنْ دُونِ اللَّهِ إِنْ كُنْتُمْ صَادِقِينَ';
        $s2ayah24 = 'فَإِنْ لَمْ تَفْعَلُوا وَلَنْ تَفْعَلُوا فَاتَّقُوا النَّارَ الَّتِي وَقُودُهَا النَّاسُ وَالْحِجَارَةُ ۖ أُعِدَّتْ لِلْكَافِرِينَ';
        $s2ayah25 = 'وَبَشِّرِ الَّذِينَ آمَنُوا وَعَمِلُوا الصَّالِحَاتِ أَنَّ لَهُمْ جَنَّاتٍ تَجْرِي مِنْ تَحْتِهَا الْأَنْهَارُ ۖ كُلَّمَا رُزِقُوا مِنْهَا مِنْ ثَمَرَةٍ رِزْقًا ۙ قَالُوا هَٰذَا الَّذِي رُزِقْنَا مِنْ قَبْلُ ۖ وَأُتُوا بِهِ مُتَشَابِهًا ۖ وَلَهُمْ فِيهَا أَزْوَاجٌ مُطَهَّرَةٌ ۖ وَهُمْ فِيهَا خَالِدُونَ';
        $s2ayah26 = 'إِنَّ اللَّهَ لَا يَسْتَحْيِي أَنْ يَضْرِبَ مَثَلًا مَا بَعُوضَةً فَمَا فَوْقَهَا ۚ فَأَمَّا الَّذِينَ آمَنُوا فَيَعْلَمُونَ أَنَّهُ الْحَقُّ مِنْ رَبِّهِمْ ۖ وَأَمَّا الَّذِينَ كَفَرُوا فَيَقُولُونَ مَاذَا أَرَادَ اللَّهُ بِهَٰذَا مَثَلًا ۘ يُضِلُّ بِهِ كَثِيرًا وَيَهْدِي بِهِ كَثِيرًا ۚ وَمَا يُضِلُّ بِهِ إِلَّا الْفَاسِقِينَ';
        $s2ayah27 = 'الَّذِينَ يَنْقُضُونَ عَهْدَ اللَّهِ مِنْ بَعْدِ مِيثَاقِهِ وَيَقْطَعُونَ مَا أَمَرَ اللَّهُ بِهِ أَنْ يُوصَلَ وَيُفْسِدُونَ فِي الْأَرْضِ ۚ أُولَٰئِكَ هُمُ الْخَاسِرُونَ';
        $s2ayah28 = 'كَيْفَ تَكْفُرُونَ بِاللَّهِ وَكُنْتُمْ أَمْوَاتًا فَأَحْيَاكُمْ ۖ ثُمَّ يُمِيتُكُمْ ثُمَّ يُحْيِيكُمْ ثُمَّ إِلَيْهِ تُرْجَعُونَ';
        $s2ayah29 = 'هُوَ الَّذِي خَلَقَ لَكُمْ مَا فِي الْأَرْضِ جَمِيعًا ثُمَّ اسْتَوَىٰ إِلَى السَّمَاءِ فَسَوَّاهُنَّ سَبْعَ سَمَاوَاتٍ ۚ وَهُوَ بِكُلِّ شَيْءٍ عَلِيمٌ ';
        $s2ayah30 = 'وَإِذْ قَالَ رَبُّكَ لِلْمَلَائِكَةِ إِنِّي جَاعِلٌ فِي الْأَرْضِ خَلِيفَةً ۖ قَالُوا أَتَجْعَلُ فِيهَا مَنْ يُفْسِدُ فِيهَا وَيَسْفِكُ الدِّمَاءَ وَنَحْنُ نُسَبِّحُ بِحَمْدِكَ وَنُقَدِّسُ لَكَ ۖ قَالَ إِنِّي أَعْلَمُ مَا لَا تَعْلَمُونَ';
        $s2ayah31 = '';
        $s2ayah32 = '';
        $s2ayah33 = '';
        $s2ayah34 = '';
        $s2ayah35 = '';
        $s2ayah36 = '';
        $s2ayah37 = '';
        $s2ayah38 = '';
        $s2ayah39 = '';
        $s2ayah40 = '';
        $s2ayah41 = '';
        $s2ayah42 = '';
        $s2ayah43 = '';
        $s2ayah44 = '';
        $s2ayah45 = '';
        $s2ayah46 = '';
        $s2ayah47 = '';
        $s2ayah48 = '';
        $s2ayah49 = '';
        $s2ayah50 = '';
        $s2ayah51 = '';
        $s2ayah52 = '';
        $s2ayah53 = '';
        $s2ayah54 = '';
        $s2ayah55 = '';
        $s2ayah56 = '';
        $s2ayah57 = '';
        $s2ayah58 = '';
        $s2ayah59 = '';
        $s2ayah60 = '';
        $s2ayah61 = '';
        $s2ayah62 = '';
        $s2ayah63 = '';
        $s2ayah64 = '';
        $s2ayah65 = '';
        $s2ayah66 = '';
        $s2ayah67 = '';
        $s2ayah68 = '';
        $s2ayah69 = '';
        $s2ayah70 = '';
        $s2ayah71 = '';
        $s2ayah72 = '';
        $s2ayah73 = '';
        $s2ayah74 = '';
        $s2ayah75 = '';
        $s2ayah76 = '';
        $s2ayah77 = '';
        $s2ayah78 = '';
        $s2ayah79 = '';
        $s2ayah80 = '';
        $s2ayah81 = '';
        $s2ayah82 = '';
        $s2ayah83 = '';
        $s2ayah84 = '';
        $s2ayah85 = '';
        $s2ayah86 = '';
        $s2ayah87 = '';
        $s2ayah88 = '';
        $s2ayah89 = '';
        $s2ayah90 = '';
        $s2ayah91 = '';
        $s2ayah92 = '';
        $s2ayah93 = '';
        $s2ayah94 = '';
        $s2ayah95 = '';
        $s2ayah96 = '';
        $s2ayah97 = '';
        $s2ayah98 = '';
        $s2ayah99 = '';
        $s2ayah100 = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';
        $s2ayah = '';


        if($id == 1){

            return view('home.qurantext', 
         compact('ayah1', 'ayah2', 'ayah3', 'ayah4', 'ayah5', 'ayah6', 'ayah7'));

        }else 
        if($id == 2){

            return view('home.text1', 
         compact('s2ayah0', 's2ayah1', 's2ayah2', 's2ayah3', 's2ayah4', 's2ayah5', 's2ayah6', 's2ayah7', 's2ayah8', 's2ayah9', 's2ayah10', 's2ayah11', 's2ayah12', 's2ayah13', 's2ayah14'
         , 's2ayah15', 's2ayah16', 's2ayah17', 's2ayah18', 's2ayah19', 's2ayah20', 's2ayah21', 's2ayah22', 's2ayah23', 's2ayah24', 's2ayah25', 's2ayah26', 's2ayah27', 's2ayah28', 's2ayah29'
         , 's2ayah30'));
        }
        else
        {
            return view('home.home');
        }

        

    }

}