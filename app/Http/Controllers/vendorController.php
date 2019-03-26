<?php
/*
|--------------------------------------------------------------------------
| vendor Controller
|--------------------------------------------------------------------------
|
| This controller is responsible for handling vendor dashboard actions
|
*/



// controller Details
// ------------------
// Methods Present
// ------------------
// 01) __construct
// 02) index
// 03) saveAboutMeDetails
// 04) saveEducationDetails
// 05) saveSkillsLanguageDetails
// 06) portfolioManagmentPage
// 07) portfolioAddPage
// 08) portfolioAdd
// 09) portfolioEditPage
// 10) portfolioEdit
// 11) portfolioDelete






namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use File;
use Auth;
use Image;
use App\Vendor;
use App\VendorEducation;
use App\VendorSkill;
use App\VendorLanguage;
use App\VendorPortfolio;

class vendorController extends Controller
{



    // |---------------------------------- 01) __construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }



    //  |---------------------------------- 02) Index ----------------------------------|
    public function index()
    {
        $vendor = Auth::user();
        $vendorEducations = VendorEducation::where('vendor_id', $vendor->id)->get();
        $vendorSkills = VendorSkill::where('vendor_id', $vendor->id)->get();
        $vendorLanguages = VendorLanguage::where('vendor_id', $vendor->id)->get();
        $vendorPortfolios = VendorPortfolio::where('vendor_id', $vendor->id)->get();
        return view('vendor.dashboard', compact('vendor', 'vendorEducations', 'vendorSkills', 'vendorLanguages', 'vendorPortfolios'));
    }



    //  |---------------------------------- 03) saveAboutMeDetails ----------------------------------|
    public function saveAboutMeDetails(Request $req, $vendorId)
    {
        $vendor = Vendor::find($vendorId);
        if ($req->file('profile_img')) {

          // check if vendor image already exists
            if (File::exists('storage/vendorProfileImage/' . $vendor->profile_img)) {
                // delete the old vendor image
                Storage::delete('public/vendorProfileImage/' . $vendor->profile_img);
            }

            // upload new image
            Storage::put('public/vendorProfileImage', $req->profile_img);
            // store new image name
            $vendor->profile_img = $req->profile_img->hashName();

            //Resizing the newly uploaded image
            $imageToResize = public_path('storage/vendorProfileImage/'.$vendor->profile_img);
            $resizedImage = Image::make($imageToResize)->resize(718, 982)->save($imageToResize);
            $resizedImage->save($imageToResize);
        }

        // saving form field data
        $vendor->position = $req->position;
        $vendor->birthday = $req->birthday;
        $vendor->nationality = $req->nationality;
        $vendor->marital = $req->marital;
        $vendor->skype_id = $req->skype_id;
        $vendor->contact_number = $req->contact_number;
        $vendor->bio = $req->bio;
        $vendor->save();
        return back();
    }



    //  |---------------------------------- 04) saveEducationDetails ----------------------------------|
    public function saveEducationDetails(Request $req, $vendorId)
    {
        // get already saved vendor education
        $vendorEducations = VendorEducation::where('vendor_id', $vendorId)->get();

        // update already stored education in case there r changes (this code will run even if there r no changes)
        foreach ($vendorEducations as $index => $value) {
            $vendorEducation = VendorEducation::find($value->id);
            $vendorEducation->vendor_id = $req->vendorId;
            $vendorEducation->institute = $req->instituteSaved[$index];
            $vendorEducation->degree_diploma = $req->degree_diplomaSaved[$index];
            $vendorEducation->year_start = $req->yearStartSaved[$index];
            $vendorEducation->year_end = $req->yearEndSaved[$index];
            $vendorEducation->save();
        }

        // if new education field added
        foreach ($req['institute'] as $index => $value) {
            if ($req->institute[$index] != "" && $req->degree_diploma[$index] != "" && $req->yearStart[$index] != "" && $req->yearEnd[$index] != "") {
                $vendorEducation = new VendorEducation;
                $vendorEducation->vendor_id = $req->vendorId;
                $vendorEducation->institute = $req->institute[$index];
                $vendorEducation->degree_diploma = $req->degree_diploma[$index];
                $vendorEducation->year_start = $req->yearStart[$index];
                $vendorEducation->year_end = $req->yearEnd[$index];
                $vendorEducation->save();
            }
        }
        return back();
    }



    //  |---------------------------------- 05) saveSkillsLanguageDetails ----------------------------------|
    public function saveSkillsLanguageDetails(Request $req, $vendorId)
    {
        // get already saved vendor education
        $vendorSkills = VendorSkill::where('vendor_id', $vendorId)->get();
        $vendorLanguages = VendorLanguage::where('vendor_id', $vendorId)->get();

        // update already stored skill in case there r changes (this code will run even if there r no changes)
        foreach ($vendorSkills as $index => $value) {
            $vendorSkill = VendorSkill::find($value->id);
            $vendorSkill->vendor_id = $req->vendorId;
            $vendorSkill->skill = $req->skillSaved[$index];
            $vendorSkill->level = $req->skillLevelSaved[$index];
            $vendorSkill->save();
        }

        // if new skill field added
        foreach ($req['skill'] as $index => $value) {
            if ($req->skill[$index] != "" && $req->skillLevel[$index] != "") {
                $vendorSkill = new VendorSkill;
                $vendorSkill->vendor_id = $req->vendorId;
                $vendorSkill->skill = $req->skill[$index];
                $vendorSkill->level = $req->skillLevel[$index];
                $vendorSkill->save();
            }
        }

        // update already stored language in case there r changes (this code will run even if there r no changes)
        foreach ($vendorLanguages as $index => $value) {
            $vendorLanguage = VendorLanguage::find($value->id);
            $vendorLanguage->vendor_id = $req->vendorId;
            $vendorLanguage->language = $req->languageSaved[$index];
            $vendorLanguage->level = $req->languageLevelSaved[$index];
            $vendorLanguage->save();
        }

        // if new language field added
        foreach ($req['language'] as $index => $value) {
            if ($req->language[$index] != "" && $req->languageLevel[$index] != "") {
                $vendorLanguage = new VendorLanguage;
                $vendorLanguage->vendor_id = $req->vendorId;
                $vendorLanguage->language = $req->language[$index];
                $vendorLanguage->level = $req->languageLevel[$index];
                $vendorLanguage->save();
            }
        }
        return back();
    }



    //  |---------------------------------- 06) portfolioManagmentPage ----------------------------------|
    public function portfolioManagmentPage($vendorId)
    {
        $vendor = Auth::user();
        $vendorPortfolios = VendorPortfolio::where('vendor_id', $vendorId)->get();
        return view('vendor.portfolio.allPortfolios', compact('vendor', 'vendorPortfolios'));
    }



    //  |---------------------------------- 07) portfolioAddPage ----------------------------------|
    public function portfolioAddPage()
    {
        $vendor = Auth::user();
        return view('vendor.portfolio.portfolioAdd', compact('vendor'));
    }



    //  |---------------------------------- 08) portfolioAdd ----------------------------------|
    public function portfolioAdd(Request $req, $vendorId)
    {
        $vendorPortfolio = new VendorPortfolio;
        if ($req->file('portfolio_image')) {
            // upload new image
            Storage::put('public/vendorPortfolioImage', $req->portfolio_image);
            // store new image name
            $vendorPortfolio->portfolio_image = $req->portfolio_image->hashName();
        }
        $vendorPortfolio->vendor_id = $vendorId;
        $vendorPortfolio->title = $req->title;
        $vendorPortfolio->description = $req->description;
        $vendorPortfolio->save();
        return redirect()->route('vendor.portfolioManagmentPage', ['id'=>$vendorPortfolio->vendor_id]);
    }



    //  |---------------------------------- 09) portfolioEditPage ----------------------------------|
    public function portfolioEditPage($portfolioId)
    {
        $vendor = Auth::user();
        $vendorPortfolio = VendorPortfolio::find($portfolioId);
        return view('vendor.portfolio.portfolioEdit', compact('vendor', 'vendorPortfolio'));
    }



    //  |---------------------------------- 10) portfolioEdit ----------------------------------|
    public function portfolioEdit(Request $req, $portfolioId)
    {
        $vendorPortfolio = VendorPortfolio::find($portfolioId);

        if ($req->file('portfolio_image')) {
            // check if vendor image already exists
            if (File::exists('storage/vendorPortfolioImage/' . $vendorPortfolio->portfolio_image)) {
                // delete the old vendor image
                Storage::delete('public/vendorPortfolioImage/' . $vendorPortfolio->portfolio_image);
            }
            // upload new image
            Storage::put('public/vendorPortfolioImage', $req->portfolio_image);
            // store new image name
            $vendorPortfolio->portfolio_image = $req->portfolio_image->hashName();
        }

        $vendorPortfolio->title = $req->title;
        $vendorPortfolio->description = $req->description;
        $vendorPortfolio->save();
        return redirect()->route('vendor.portfolioManagmentPage', ['id'=>$vendorPortfolio->vendor_id]);
    }



    //  |---------------------------------- 11) portfolioDelete ----------------------------------|
    public function portfolioDelete($portfolioId)
    {
        $vendorPortfolio = VendorPortfolio::find($portfolioId);
        if (File::exists('storage/vendorPortfolioImage/' . $vendorPortfolio->portfolio_image)) {
            // delete the old vendor image
            Storage::delete('public/vendorPortfolioImage/' . $vendorPortfolio->portfolio_image);
        }
        $vendorPortfolio->delete();
        return redirect()->route('vendor.portfolioManagmentPage', ['id'=>$vendorPortfolio->vendor_id]);
    }
}
