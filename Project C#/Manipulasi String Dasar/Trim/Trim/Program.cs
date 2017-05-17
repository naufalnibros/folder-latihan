using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Trim
{
    class Program
    {
        static void Main(string[] args)
        {
            //Menghilangkan karakater white space yang berada
            //di depan atau dibelakang sebuah String
            string kalimat = " teknik informatika ";
            kalimat = kalimat.Trim();
            Console.WriteLine(kalimat);
        }
    }
}
