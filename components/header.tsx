import { HiSearch } from "react-icons/hi";

export default function Header(){
    return(
        <header className="fixed w-screen bg-white z-10 outline-1 outline-neutral-300 justify-between flex-row flex p-2 items-center px-6">
            <section className="w-1/3 m-auto">
                 <div className="outline-1 outline-neutral-300 ml-12 rounded-full ">
                    <form action="pacient" className="flex">
                        <button type="submit" className=" outline-1 transition-all cursor-pointer outline-neutral-300 hover:text-white w-11 font-bold flex justify-center items-center hover:bg-blue-900 text-center mx-auto rounded-full"><HiSearch/></button>
                        <input className="w-full placeholder:font-semibold placeholder:text-sm focus:outline-0 p-2 pr-4 " placeholder="Pesquise aqui nome dos pacientes"/>
                    </form>
                </div>
            </section>
            <section>
                <article className="flex flex-col">
                    <p className="text-sm">NOME</p>
                    <h1 className="">SETOR TRABALHO</h1>
                </article>
            </section>
        </header>
    )
}