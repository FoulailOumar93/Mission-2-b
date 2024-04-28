<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visiteur; // Assurez-vous que ce modèle existe et est correctement nommé
use PDF; // Importation de la façade PDF

class PdfExportController extends Controller
{
    public function export()
    {
        // Récupérer les visiteurs du mois d'avril
        $lesvisiteur = visiteur::whereMonth('created_at', '=', '04')->get();

        // Générer le PDF
        $dompdf = PDF::loadView('pdf.visiteurs.blade.php', compact('visiteurs'));
        return $dompdf->download('visiteurs_avril.pdf');
    }
}
 