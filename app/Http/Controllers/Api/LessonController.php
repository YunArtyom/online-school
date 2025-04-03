<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSubjectFormRequest;
use App\Http\Requests\EditGradeFormRequest;
use App\Http\Requests\EditSubjectFormRequest;
use App\Http\Resources\Grades\GradeResource;
use App\Http\Resources\Grades\GradesResource;
use App\Http\Resources\Subjects\SubjectsResource;
use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class LessonController extends Controller
{
    //GRADES
    public function grades(): AnonymousResourceCollection
    {
        return GradesResource::collection(Grade::orderBy('grade', 'asc')->get());
    }

    public function grade(Grade $grade): GradeResource
    {
        return new GradeResource($grade);
    }

    public function editGrade(Grade $grade, EditGradeFormRequest $request): GradeResource
    {
        $grade->update($request->validated());

        return new GradeResource($grade);
    }

    public function deactivateActivateGrade(Grade $grade): JsonResponse
    {
        $grade->status = $grade->status === Grade::ACTIVE_STATUS ? Grade::INACTIVE_STATUS : Grade::ACTIVE_STATUS;
        $grade->save();

        return response()->json();
    }

    //SUBJECTS
    public function subject(Subject $subject): SubjectsResource
    {
        return new SubjectsResource($subject);
    }

    public function createSubject(CreateSubjectFormRequest $request): JsonResponse
    {
        Subject::create($request->validated());

        return response()->json(status: 201);
    }

    public function editSubject(Subject $subject, EditSubjectFormRequest $request): SubjectsResource
    {
        $subject->update($request->validated());

        return new SubjectsResource($subject);
    }

    public function deactivateActivateSubject(Subject $subject): JsonResponse
    {
        $subject->status = $subject->status === Grade::ACTIVE_STATUS ? Grade::INACTIVE_STATUS : Grade::ACTIVE_STATUS;
        $subject->save();

        return response()->json();
    }


    public function addTeacherToSubject()
    {

    }

    public function topics()
    {

    }

    public function addTopicToDay()
    {

    }

    public function createTopic()
    {

    }

    public function editTopic()
    {

    }

    public function deleteTopic()
    {

    }

    public function deactivateActivateTopic()
    {

    }

    public function day()
    {

    }

    public function editDay()
    {

    }

    public function calendar()
    {

    }
}
