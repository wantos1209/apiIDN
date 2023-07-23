<?php

namespace App\Http\Controllers;

use App\Models\LinkPgaArta;
use App\Models\LinkPgaArwana;
use App\Models\LinkPgaDoyan;
use App\Models\LinkPgaJeep;
use App\Models\LinkPgaNeon;
use App\Models\LinkPgaNero;
use App\Models\LinkPgaRoma;
use App\Models\LinkPgaTs;
use App\Models\LinkPgaZara;
use App\Models\Idnslideshow;
use App\Models\Arta4dvip;
use App\Models\Arwanatotovip;
use App\Models\Doyantotovip;
use App\Models\Jeeptotovip;
use App\Models\Neon4dvip;
use App\Models\Nero4dvip;
use App\Models\Roma4dvip;
use App\Models\Tstotovip;
use App\Models\Zara4dvip;
use App\Models\BannerModal;


use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //================================================================================================
    //  Link Pga Arta    
    //================================================================================================
    public function indexlinkpgaartas()
    {
        $linkpgaartas = LinkPgaArta::all();
        return response()->json([
            'data' => $linkpgaartas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storelinkpgaartas(Request $request)
    {
        $linkpgaarta = LinkPgaArta::create($request->all());

        return response()->json([
            'data' => $linkpgaarta
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showlinkpgaartas($id)
    {
        $linkpgaarta = LinkPgaArta::findOrFail($id);

        return response()->json([
            'data' => $linkpgaarta
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatelinkpgaartas(Request $request, $id)
    {
        $linkpgaarta = LinkPgaArta::findOrFail($id);
        $linkpgaarta->update($request->all());

        return response()->json([
            'data' => $linkpgaarta
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroylinkpgaartas($id)
    {
        $linkpgaarta = LinkPgaArta::findOrFail($id);
        $linkpgaarta->delete();

        return response()->json([
            'message' => 'LinkPgaArta deleted'
        ], 204);
    }

    //================================================================================================
    //  Link Pga Arwana    
    //================================================================================================
    public function indexlinkpgaarwana()
    {
        $linkpgaarwanas = LinkPgaArwana::all();
        return response()->json([
            'data' => $linkpgaarwanas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storelinkpgaarwana(Request $request)
    {
        $linkpgaarwana = LinkPgaArwana::create($request->all());

        return response()->json([
            'data' => $linkpgaarwana
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showlinkpgaarwana($id)
    {
        $linkpgaarwana = LinkPgaArwana::findOrFail($id);

        return response()->json([
            'data' => $linkpgaarwana
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatelinkpgaarwana(Request $request, $id)
    {
        $linkpgaarwana = LinkPgaArwana::findOrFail($id);
        $linkpgaarwana->update($request->all());

        return response()->json([
            'data' => $linkpgaarwana
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroylinkpgaarwana($id)
    {
        $linkpgaarwana = LinkPgaArwana::findOrFail($id);
        $linkpgaarwana->delete();

        return response()->json([
            'message' => 'LinkPgaArwana deleted'
        ], 204);
    }

    //================================================================================================
    //  Link Pga Doyan    
    //================================================================================================
    public function indexlinkpgadoyans()
    {
        $linkpgadoyans = LinkPgaDoyan::all();
        return response()->json([
            'data' => $linkpgadoyans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storelinkpgadoyans(Request $request)
    {
        $linkpgadoyan = LinkPgaDoyan::create($request->all());

        return response()->json([
            'data' => $linkpgadoyan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showlinkpgadoyans($id)
    {
        $linkpgadoyan = LinkPgaDoyan::findOrFail($id);

        return response()->json([
            'data' => $linkpgadoyan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatelinkpgadoyans(Request $request, $id)
    {
        $linkpgadoyan = LinkPgaDoyan::findOrFail($id);
        $linkpgadoyan->update($request->all());

        return response()->json([
            'data' => $linkpgadoyan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroylinkpgadoyans($id)
    {
        $linkpgadoyan = LinkPgaDoyan::findOrFail($id);
        $linkpgadoyan->delete();

        return response()->json([
            'message' => 'LinkPgaDoyan deleted'
        ], 204);
    }


    //================================================================================================
    //  Link Pga Doyan    
    //================================================================================================
    public function indexlinkpgajeeps()
    {
        $linkpgajeeps = LinkPgaJeep::all();
        return response()->json([
            'data' => $linkpgajeeps
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storelinkpgajeeps(Request $request)
    {
        $linkpgajeep = LinkPgaJeep::create($request->all());

        return response()->json([
            'data' => $linkpgajeep
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showlinkpgajeeps($id)
    {
        $linkpgajeep = LinkPgaJeep::findOrFail($id);

        return response()->json([
            'data' => $linkpgajeep
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatelinkpgajeeps(Request $request, $id)
    {
        $linkpgajeep = LinkPgaJeep::findOrFail($id);
        $linkpgajeep->update($request->all());

        return response()->json([
            'data' => $linkpgajeep
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroylinkpgajeeps($id)
    {
        $linkpgajeep = LinkPgaJeep::findOrFail($id);
        $linkpgajeep->delete();

        return response()->json([
            'message' => 'LinkPgaJeep deleted'
        ], 204);
    }

    //================================================================================================
    //  Link Pga Neon    
    //================================================================================================
    public function indexlinkpganeons()
    {
        $linkpganeons = LinkPgaNeon::all();
        return response()->json([
            'data' => $linkpganeons
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storelinkpganeons(Request $request)
    {
        $linkpganeon = LinkPgaNeon::create($request->all());

        return response()->json([
            'data' => $linkpganeon
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showlinkpganeons($id)
    {
        $linkpganeon = LinkPgaNeon::findOrFail($id);

        return response()->json([
            'data' => $linkpganeon
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatelinkpganeons(Request $request, $id)
    {
        $linkpganeon = LinkPgaNeon::findOrFail($id);
        $linkpganeon->update($request->all());

        return response()->json([
            'data' => $linkpganeon
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroylinkpganeons($id)
    {
        $linkpganeon = LinkPgaNeon::findOrFail($id);
        $linkpganeon->delete();

        return response()->json([
            'message' => 'LinkPgaNeon deleted'
        ], 204);
    }


    //================================================================================================
    //  Link Pga Neon    
    //================================================================================================
    public function indexlinkpganeros()
    {
        $linkpganeros = LinkPgaNero::all();
        return response()->json([
            'data' => $linkpganeros
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storelinkpganeros(Request $request)
    {
        $linkpganero = LinkPgaNero::create($request->all());

        return response()->json([
            'data' => $linkpganero
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showlinkpganeros($id)
    {
        $linkpganero = LinkPgaNero::findOrFail($id);

        return response()->json([
            'data' => $linkpganero
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatelinkpganeros(Request $request, $id)
    {
        $linkpganero = LinkPgaNero::findOrFail($id);
        $linkpganero->update($request->all());

        return response()->json([
            'data' => $linkpganero
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroylinkpganeros($id)
    {
        $linkpganero = LinkPgaNero::findOrFail($id);
        $linkpganero->delete();

        return response()->json([
            'message' => 'LinkPgaNero deleted'
        ], 204);
    }


    //================================================================================================
    //  Link Pga Roma    
    //================================================================================================
    public function indexlinkpgaromas()
    {
        $linkpgaromas = LinkPgaRoma::all();
        return response()->json([
            'data' => $linkpgaromas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storelinkpgaromas(Request $request)
    {
        $linkpgaroma = LinkPgaRoma::create($request->all());

        return response()->json([
            'data' => $linkpgaroma
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showlinkpgaromas($id)
    {
        $linkpgaroma = LinkPgaRoma::findOrFail($id);

        return response()->json([
            'data' => $linkpgaroma
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatelinkpgaromas(Request $request, $id)
    {
        $linkpgaroma = LinkPgaRoma::findOrFail($id);
        $linkpgaroma->update($request->all());

        return response()->json([
            'data' => $linkpgaroma
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroylinkpgaromas($id)
    {
        $linkpgaroma = LinkPgaRoma::findOrFail($id);
        $linkpgaroma->delete();

        return response()->json([
            'message' => 'LinkPgaRoma deleted'
        ], 204);
    }


    //================================================================================================
    //  Link Pga arta    
    //================================================================================================
    public function indexlinkpgats()
    {
        $linkpgatss = LinkPgaTs::all();
        return response()->json([
            'data' => $linkpgatss
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storelinkpgats(Request $request)
    {
        $linkpgats = LinkPgaTs::create($request->all());

        return response()->json([
            'data' => $linkpgats
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showlinkpgats($id)
    {
        $linkpgats = LinkPgaTs::findOrFail($id);

        return response()->json([
            'data' => $linkpgats
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatelinkpgats(Request $request, $id)
    {
        $linkpgats = LinkPgaTs::findOrFail($id);
        $linkpgats->update($request->all());

        return response()->json([
            'data' => $linkpgats
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroylinkpgats($id)
    {
        $linkpgats = LinkPgaTs::findOrFail($id);
        $linkpgats->delete();

        return response()->json([
            'message' => 'LinkPgaTs deleted'
        ], 204);
    }

    //================================================================================================
    //  Link Pga zara    
    //================================================================================================
    public function indexlinkpgazaras()
    {
        $linkpgazaras = LinkPgaZara::all();
        return response()->json([
            'data' => $linkpgazaras
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storelinkpgazaras(Request $request)
    {
        $linkpgazara = LinkPgaZara::create($request->all());

        return response()->json([
            'data' => $linkpgazara
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showlinkpgazaras($id)
    {
        $linkpgazara = LinkPgaZara::findOrFail($id);

        return response()->json([
            'data' => $linkpgazara
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatelinkpgazaras(Request $request, $id)
    {
        $linkpgazara = LinkPgaZara::findOrFail($id);
        $linkpgazara->update($request->all());

        return response()->json([
            'data' => $linkpgazara
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroylinkpgazaras($id)
    {
        $linkpgazara = LinkPgaZara::findOrFail($id);
        $linkpgazara->delete();

        return response()->json([
            'message' => 'LinkPgaZara deleted'
        ], 204);
    }


    //================================================================================================
    //  Link Pga idn slide show    
    //================================================================================================
    public function indexidnslideshows()
    {
        $idnslideshows = Idnslideshow::all();
        return response()->json([
            'data' => $idnslideshows
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeidnslideshows(Request $request)
    {
        $idnslideshow = Idnslideshow::create($request->all());

        return response()->json([
            'data' => $idnslideshow
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showidnslideshows($id)
    {
        $idnslideshow = Idnslideshow::findOrFail($id);

        return response()->json([
            'data' => $idnslideshow
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateidnslideshows(Request $request, $id)
    {
        $idnslideshow = Idnslideshow::findOrFail($id);
        $idnslideshow->update($request->all());

        return response()->json([
            'data' => $idnslideshow
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyidnslideshows($id)
    {
        $idnslideshow = Idnslideshow::findOrFail($id);
        $idnslideshow->delete();

        return response()->json([
            'message' => 'Idnslideshow deleted'
        ], 204);
    }


    //================================================================================================
    //  Arta4d VIP 
    //================================================================================================
    public function indexarta4dvips()
    {
        $arta4dvips = Arta4dvip::all();
        return response()->json([
            'data' => $arta4dvips
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storearta4dvip(Request $request)
    {
        $arta4dvip = Arta4dvip::create($request->all());

        return response()->json([
            'data' => $arta4dvip
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showarta4dvip($id)
    {
        $arta4dvip = Arta4dvip::findOrFail($id);

        return response()->json([
            'data' => $arta4dvip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatearta4dvip(Request $request, $id)
    {
        $arta4dvip = Arta4dvip::findOrFail($id);
        $arta4dvip->update($request->all());

        return response()->json([
            'data' => $arta4dvip
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyarta4dvip($id)
    {
        $arta4dvip = Arta4dvip::findOrFail($id);
        $arta4dvip->delete();

        return response()->json([
            'message' => 'Arta4dvip deleted'
        ], 204);
    }


    //================================================================================================
    //  Arwana VIP 
    //================================================================================================
    public function indexarwanatotovips()
    {
        $arwanatotovips = Arwanatotovip::all();
        return response()->json([
            'data' => $arwanatotovips
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storearwanatotovips(Request $request)
    {
        $arwanatotovip = Arwanatotovip::create($request->all());

        return response()->json([
            'data' => $arwanatotovip
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showarwanatotovips($id)
    {
        $arwanatotovip = Arwanatotovip::findOrFail($id);

        return response()->json([
            'data' => $arwanatotovip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatearwanatotovips(Request $request, $id)
    {
        $arwanatotovip = Arwanatotovip::findOrFail($id);
        $arwanatotovip->update($request->all());

        return response()->json([
            'data' => $arwanatotovip
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyarwanatotovips($id)
    {
        $arwanatotovip = Arwanatotovip::findOrFail($id);
        $arwanatotovip->delete();

        return response()->json([
            'message' => 'Arwanatotovip deleted'
        ], 204);
    }

    //================================================================================================
    //  Doyan VIP
    //================================================================================================
    public function indexdoyantotovips()
    {
        $doyantotovips = Doyantotovip::all();
        return response()->json([
            'data' => $doyantotovips
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storedoyantotovips(Request $request)
    {
        $doyantotovip = Doyantotovip::create($request->all());

        return response()->json([
            'data' => $doyantotovip
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showdoyantotovips($id)
    {
        $doyantotovip = Doyantotovip::findOrFail($id);

        return response()->json([
            'data' => $doyantotovip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatedoyantotovips(Request $request, $id)
    {
        $doyantotovip = Doyantotovip::findOrFail($id);
        $doyantotovip->update($request->all());

        return response()->json([
            'data' => $doyantotovip
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroydoyantotovips($id)
    {
        $doyantotovip = Doyantotovip::findOrFail($id);
        $doyantotovip->delete();

        return response()->json([
            'message' => 'Doyantotovip deleted'
        ], 204);
    }


    //================================================================================================
    //  Jeep VIP
    //================================================================================================
    public function indexjeeptotovips()
    {
        $jeeptotovips = Jeeptotovip::all();
        return response()->json([
            'data' => $jeeptotovips
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storejeeptotovips(Request $request)
    {
        $jeeptotovip = Jeeptotovip::create($request->all());

        return response()->json([
            'data' => $jeeptotovip
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showjeeptotovips($id)
    {
        $jeeptotovip = Jeeptotovip::findOrFail($id);

        return response()->json([
            'data' => $jeeptotovip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatejeeptotovips(Request $request, $id)
    {
        $jeeptotovip = Jeeptotovip::findOrFail($id);
        $jeeptotovip->update($request->all());

        return response()->json([
            'data' => $jeeptotovip
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyjeeptotovips($id)
    {
        $jeeptotovip = Jeeptotovip::findOrFail($id);
        $jeeptotovip->delete();

        return response()->json([
            'message' => 'Jeeptotovip deleted'
        ], 204);
    }


    //================================================================================================
    //  Doyan VIP
    //================================================================================================
    public function indexneon4dvips()
    {
        $neon4dvips = Neon4dvip::all();
        return response()->json([
            'data' => $neon4dvips
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeneon4dvips(Request $request)
    {
        $neon4dvip = Neon4dvip::create($request->all());

        return response()->json([
            'data' => $neon4dvip
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showneon4dvips($id)
    {
        $neon4dvip = Neon4dvip::findOrFail($id);

        return response()->json([
            'data' => $neon4dvip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateneon4dvips(Request $request, $id)
    {
        $neon4dvip = Neon4dvip::findOrFail($id);
        $neon4dvip->update($request->all());

        return response()->json([
            'data' => $neon4dvip
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyneon4dvips($id)
    {
        $neon4dvip = Neon4dvip::findOrFail($id);
        $neon4dvip->delete();

        return response()->json([
            'message' => 'Neon4dvip deleted'
        ], 204);
    }


    //================================================================================================
    //  Nero VIP
    //================================================================================================
    public function indexnero4dvips()
    {
        $nero4dvips = Nero4dvip::all();
        return response()->json([
            'data' => $nero4dvips
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storenero4dvips(Request $request)
    {
        $nero4dvip = Nero4dvip::create($request->all());

        return response()->json([
            'data' => $nero4dvip
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function shownero4dvips($id)
    {
        $nero4dvip = Nero4dvip::findOrFail($id);

        return response()->json([
            'data' => $nero4dvip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatenero4dvips(Request $request, $id)
    {
        $nero4dvip = Nero4dvip::findOrFail($id);
        $nero4dvip->update($request->all());

        return response()->json([
            'data' => $nero4dvip
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroynero4dvips($id)
    {
        $nero4dvip = Nero4dvip::findOrFail($id);
        $nero4dvip->delete();

        return response()->json([
            'message' => 'Nero4dvip deleted'
        ], 204);
    }


    //================================================================================================
    //  Roma VIP
    //================================================================================================
    public function indexroma4dvips()
    {
        $roma4dvips = Roma4dvip::all();
        return response()->json([
            'data' => $roma4dvips
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeroma4dvips(Request $request)
    {
        $roma4dvip = Roma4dvip::create($request->all());

        return response()->json([
            'data' => $roma4dvip
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showroma4dvips($id)
    {
        $roma4dvip = Roma4dvip::findOrFail($id);

        return response()->json([
            'data' => $roma4dvip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateroma4dvips(Request $request, $id)
    {
        $roma4dvip = Roma4dvip::findOrFail($id);
        $roma4dvip->update($request->all());

        return response()->json([
            'data' => $roma4dvip
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyroma4dvips($id)
    {
        $roma4dvip = Roma4dvip::findOrFail($id);
        $roma4dvip->delete();

        return response()->json([
            'message' => 'Roma4dvip deleted'
        ], 204);
    }


    //================================================================================================
    //  Tstoto VIP
    //================================================================================================
    public function indextstotovips()
    {
        $tstotovips = Tstotovip::all();
        return response()->json([
            'data' => $tstotovips
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storetstotovips(Request $request)
    {
        $tstotovip = Tstotovip::create($request->all());

        return response()->json([
            'data' => $tstotovip
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showtstotovips($id)
    {
        $tstotovip = Tstotovip::findOrFail($id);

        return response()->json([
            'data' => $tstotovip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatetstotovips(Request $request, $id)
    {
        $tstotovip = Tstotovip::findOrFail($id);
        $tstotovip->update($request->all());

        return response()->json([
            'data' => $tstotovip
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroytstotovips($id)
    {
        $tstotovip = Tstotovip::findOrFail($id);
        $tstotovip->delete();

        return response()->json([
            'message' => 'Tstotovip deleted'
        ], 204);
    }



    //================================================================================================
    //  Zara VIP
    //================================================================================================
    public function indexzara4dvips()
    {
        $zara4dvips = Zara4dvip::all();
        return response()->json([
            'data' => $zara4dvips
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storezara4dvip(Request $request)
    {
        $zara4dvip = Zara4dvip::create($request->all());

        return response()->json([
            'data' => $zara4dvip
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showzara4dvip($id)
    {
        $zara4dvip = Zara4dvip::findOrFail($id);

        return response()->json([
            'data' => $zara4dvip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatezara4dvip(Request $request, $id)
    {
        $zara4dvip = Zara4dvip::findOrFail($id);
        $zara4dvip->update($request->all());

        return response()->json([
            'data' => $zara4dvip
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyzara4dvip($id)
    {
        $zara4dvip = Zara4dvip::findOrFail($id);
        $zara4dvip->delete();

        return response()->json([
            'message' => 'Zara4dvip deleted'
        ], 204);
    }


    //================================================================================================
    //  Banner Modal
    //================================================================================================
    public function indexbannermodal()
    {
        $bannermodal = BannerModal::all();
        return response()->json([
            'data' => $bannermodal
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storebannermodal(Request $request)
    {
        $datawebsite = BannerModal::create($request->all());

        return response()->json([
            'data' => $datawebsite
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function showbannermodal($id)
    {
        $datawebsite = BannerModal::findOrFail($id);

        return response()->json([
            'data' => $datawebsite
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatebannermodal(Request $request, $id)
    {
        $datawebsite = BannerModal::findOrFail($id);
        $datawebsite->update($request->all());

        return response()->json([
            'data' => $datawebsite
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroybannermodal($id)
    {
        $datawebsite = BannerModal::findOrFail($id);
        $datawebsite->delete();

        return response()->json([
            'message' => 'BannerModal deleted'
        ], 204);
    }
}
