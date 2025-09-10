import { ReactNode } from "react";

interface CardProps{
    children: ReactNode;
    style: string;
}

function Card({children, style}:CardProps){
    return(
        <div className={` bg-white shadow-xs outline-1 outline-neutral-300 ${style}`}>
            {children}
        </div>
    )
}

export function PacientCard() {
    return(
        <Card style="w-64 p-6 rounded-2xl hover:scale-105 transition-all">
            <div className="flex gap-4 justify-between items-center flex-row">
                <p className="opacity-65">20 Abr, 2024</p>
                <div className="bg-black w-10 h-10 rounded-full">a</div>
            </div>
            <div>
                <h1 className="font-bold">NOME PACIENTE</h1>
                <p className="text-sm opacity-75">é imporannte lembrar que o joão teduardo tem alguma coisa de teste nesse texto a que legal eu não sei o que eu to escrevendo e nem dormi a noit...</p>
            </div>
        </Card>
    )
}

export function TitleCard(){
    return(
        <Card style="rounded-xl mb-6 px-6 p-4">
            <h1 className="text-2xl font-semibold">Pacientes marcados</h1>
        </Card>
    )
}