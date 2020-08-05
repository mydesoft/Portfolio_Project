<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\About;
use App\Education;
use App\Experience;
use App\Portfolio;
use App\contact;
use App\User;


class AdminPanelController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth')->except(['admin', 'AdminLogin']);
    // }
    public function admin(){
        
        return view('pages.Admin.Dashboard.signin');
    }

    public function AdminLogin(){
        $AdminLogin_Attributes = request()->validate([
            'email' => 'required|min:10',
            'password' => 'required|min:8'
        ]);

        if(!Auth::attempt($AdminLogin_Attributes)){
           
            return redirect('/admin')->with('error', 'Login Details Does Not Match!');
        }
        else{
            return redirect()-> route('dashboard');
        }
    }
    public function dashboard(){
        $abouts = About::all();
        $educations = Education::orderBy('created_at', 'desc')->get(); 
        $experiences = Experience::orderBy('created_at', 'asc')->get();
        $portfolios = Portfolio::orderBy('created_at', 'asc')->get();
       return view('pages.Admin.Dashboard.dashboard', compact('abouts', 'educations', 'experiences', 'portfolios'));
    }

    public function AdminSignout(){
        Auth::logout();
        return redirect()->route('login');
    }


    public function AdminUpdatePassword(Request $request){
     
        $user = auth()->user();

        $this->validate($request, [
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
            ]);

            
                $user->fill(['password' => Hash::make($request->password_confirmation)])->save();
            
            
           

            

        return redirect('/dashboard')->with('success', 'Password Has Been Updated');
    }

    //EDITPROFILE VIEW
    public function AdminEditProfile(){
        $abouts = About::all();
        $educations = Education::orderBy('created_at', 'asc')->get(); 
        $experiences = Experience::orderBy('created_at', 'asc')->get();
        $portfolios = Portfolio::orderBy('created_at', 'asc')->get();
       return view('pages.Admin.Dashboard.editprofile', compact( 'educations', 'experiences', 'portfolios'));
    }



  //THE ABOUT PAGE CODE STARTS HERE
     public function EditAboutProfile(About $about){
     return view('pages.Admin.About.edit', compact('about'));
}

public function UpdateAboutProfile(About $about){
    $about->update($this->validatepages());
    ;

    return redirect ('/dashboard')->with('success', 'Profile Updated');
}



// EDUCATION PROFILE STARTS HERE
public function CreateEducationProfile(){
    
    return view('pages.Admin.Education.create');

}

public function StoreEducationProfile(){
    $education_attributes = $this->ValidateEducationProfile();

    Education::create($education_attributes);

    return redirect('/dashboard')->with('success', 'Profile Created');
}

public function EditEducationProfile(Education $education){
    return view('pages.Admin.Education.edit', compact('education'));

}
public function UpdateEducationProfile(Education $education){
        $education->update($this->ValidateEducationProfile());
        
        return redirect('/dashboard')->with('success', 'Profile Updated');
}
public function DeleteEducationProfile(Education $education){
    $education->delete();
    return redirect('/dashboard')->with('success', 'Profile Deleted');
}


// PROFESSIONAL EXPERIENCE PROFILE START HERE
public function CreateExperienceProfile(){
return view('pages.Admin.Experience.create');
}

public function StoreExperienceProfile(){
$experience_attributes = $this->ValidateExperienceProfile();

Experience::create($experience_attributes);

return redirect('/dashboard')->with('success', 'Profile Created');
}

public function EditExperienceProfile(Experience $experience){
return view('pages.Admin.Experience.edit', compact('experience'));
}

public function UpdateExperienceProfile(Experience $experience){
$experience->update($this->ValidateExperienceProfile());

return redirect('/dashboard')->with('success', 'Profile Updated');
}

public function DeleteExperienceProfile(Experience $experience){
    $experience->delete();
    return redirect('/dashboard')->with('success', 'Profile Deleted');
}


// PORTFOLIO CODE START HERE

public function CreatePortfolioProfile(){
return view('pages.Admin.Portfolio.create');
}

public function StorePortfolioProfile(Request $request){
    $this->validate($request, [
    'portfolio_image1' => 'image',
    'portfolio_image2' => 'image',
    'portfolio_image3' => 'image'
    ]);
    

if($request->hasFile('portfolio_image1')){
    // GETTING FILENAME WITH EXTENSION 
    $FileNameWithExtension = $request->file('portfolio_image1')->getClientOriginalName();
    // GETTING FILE NAME 
    $FileName = pathinfo($FileNameWithExtension, PATHINFO_FILENAME);
    //GETTING EXTENSION
    $Extension = $request->file('portfolio_image1')->getClientOriginalExtension();
    //FILENAME TO STORE
    $FileNameToStore = $FileName.'_'.time().'.'.$Extension;
    //UPLOAD FILE
    $path = $request->file('portfolio_image1')->storeAs('public/portfolio_images', $FileNameToStore);
} 


if($request->hasFile('portfolio_image2')){
    // GETTING FILENAME WITH EXTENSION 
    $FileNameWithExtension2 = $request->file('portfolio_image2')->getClientOriginalName();
    // GETTING FILE NAME 
    $FileName2 = pathinfo($FileNameWithExtension2, PATHINFO_FILENAME);
    //GETTING EXTENSION
    $Extension2 = $request->file('portfolio_image2')->getClientOriginalExtension();
    //FILENAME TO STORE
    $FileNameToStore2 = $FileName2.'_'.time().'.'.$Extension2;
    //UPLOAD FILE
    $path = $request->file('portfolio_image2')->storeAs('public/portfolio_images', $FileNameToStore2);
} 

if($request->hasFile('portfolio_image3')){
    // GETTING FILENAME WITH EXTENSION 
    $FileNameWithExtension3 = $request->file('portfolio_image3')->getClientOriginalName();
    // GETTING FILE NAME 
    $FileName3 = pathinfo($FileNameWithExtension3, PATHINFO_FILENAME);
    //GETTING EXTENSION
    $Extension3 = $request->file('portfolio_image3')->getClientOriginalExtension();
    //FILENAME TO STORE
    $FileNameToStore3 = $FileName3.'_'.time().'.'.$Extension3;
    //UPLOAD FILE
    $path = $request->file('portfolio_image3')->storeAs('public/portfolio_images', $FileNameToStore3);
}
  
$portfolio = new Portfolio;
$portfolio->portfolio_image1 = $FileNameToStore;
$portfolio->portfolio_image2 = $FileNameToStore2;
$portfolio->portfolio_image3 = $FileNameToStore3;
$portfolio->save();
return redirect('/dashboard')->with('success', 'Profile Created');

}


public function EditPortfolioProfile(Portfolio $portfolio){
    return view('pages.Admin.Portfolio.edit', compact('portfolio'));
}

public function UpdatePortfolioProfile(Portfolio $portfolio){

    $update_portfolio = request()->validate([
        'portfolio_image1' => 'image',
        'portfolio_image2' => 'image',
        'portfolio_image3' => 'image'
        ]);

       $portfolio->update($update_portfolio); 
        
    return view('/dashboard')->with('success', 'Profile Updated');
}


public function DeletePortfolioProfile(Portfolio $portfolio){
    $portfolio->delete();
    return redirect('/dashboard')->with('success', 'Profile Deleted');
}


// PORTFOLIO CODE START HERE






// VALIDATION METHOD
//VALIDATION FOR ABOUT PAGE
public function validatepages(){
   return request()->validate([
        'site' => 'required',
        'phone' => 'required|min:11',
        'state' => 'required',
        'degree' => 'required',
        'email' => 'required'
    ]);
}
// VALIDATION FOR EDUCATION PAGE
public function ValidateEducationProfile(){
    return request()->validate([
         'qualification' => 'required',
         'date' => 'required',
         'institution' => 'required',
         'course' => 'required'
         
     ]);
 }


 // VALIDATION FOR EXPERIENCE PAGE
public function ValidateExperienceProfile(){
    return request()->validate([
         'position' => 'required',
         'year' => 'required',
         'company' => 'required',
         'responsibilities' => 'required'
         
     ]);
 }
 



   
}
